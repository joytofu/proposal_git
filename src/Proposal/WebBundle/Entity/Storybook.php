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


    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir()."\\".$this->file;
    }

    public function getWebPath()
    {
        return null === $this->file
            ? null
            : $this->getUploadDir().'\\'.$this->file;
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

    /*public function upload()
    {
// the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }
// use the original file name here but you should
// sanitize it at least to avoid any security issues
// move takes the target directory and then the
// target filename to move to
        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->getFile()->getClientOriginalName()
        );
// set the path property to the filename where you've saved the file
        $this->path = $this->getFile()->getClientOriginalName();
// clean up the file property as you won't need it anymore
        $this->file = null;
    }*/

    /**
     * Set file
     *
     * @param string $file
     * @return Storybook
     */
    public function setFile($file)
    {
        $this->file = $file;
    
        return $this;
    }
}
