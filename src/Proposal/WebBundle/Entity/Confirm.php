<?php

namespace Proposal\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Confirm
 *
 * @ORM\Table(name="confirm")
 * @ORM\Entity(repositoryClass="Proposal\WebBundle\Entity\ConfirmRepository")
 */
class Confirm {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="text")
     */
    protected $content;

    /**
     * @ORM\Column(type="string")
     */
    protected $images;


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
     * Set images
     *
     * @param string $images
     * @return Confirm
     */
    public function setImages($images)
    {
        $this->images = $images;
    
        return $this;
    }

    /**
     * Get images
     *
     * @return string 
     */
    public function getImages()
    {
        return $this->images;
    }
}
