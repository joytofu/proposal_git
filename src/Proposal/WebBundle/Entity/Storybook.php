<?php

namespace Proposal\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Bridge\Doctrine\Validator\Constraints as Assert;

/**
 * Storybook
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Proposal\WebBundle\Entity\StorybookRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Storybook
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(name="content",type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string")
     */
    private $file;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $path;

    private $temp;

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }
    public function getWebPath()
    {
        return null === $this->file
            ? null
            : $this->getUploadDir().'/'.$this->file;
    }
    protected function getUploadRootDir()
    {
// the absolute directory path where uploaded
// documents should be saved
        return dirname(__DIR__).$this->getUploadDir();
    }
    protected function getUploadDir()
    {
// get rid of the __DIR__ so it doesn't screw up
// when displaying uploaded doc/image in the view.
        return '\images';
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Storybook
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Storybook
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }


    /**
     * Set file
     *
     * @param string $file
     * @return Storybook
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
// check if we have an old image path
        if (isset($this->path)) {
// store the old name to delete after the update
            $this->temp = $this->path;
            $this->path = null;
        } else {
            $this->path = 'initial';
        }

        return $this;
    }

    /**
     * Get file
     *
     * @return Uploaded file
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Storybook
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }


    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
// do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            //$filename = $this->getFile()->getClientOriginalName();
            $this->path = $this->getUploadRootDir()."\\".$filename.".".$this->getFile()->getClientOriginalExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }
// if there is an error when moving the file, an exception will
// be automatically thrown by move(). This will properly prevent
// the entity from being persisted to the database on error
        $this->getFile()->move($this->getUploadRootDir(), $this->path);
// check if we have an old image
        if (isset($this->temp)) {
// delete the old image
            unlink($this->getUploadRootDir().'/'.$this->temp);
// clear the temp image path
            $this->temp = null;
        }
        $this->file = null;
    }


    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        $file = $this->getAbsolutePath();
        if ($file) {
            unlink($file);
        }
    }
}
