<?php

namespace Proposal\WebBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints;

/**
 * @ORM\Entity(repositoryClass="Proposal2Repository")
 * @ORM\Table(name="proposal2")
 */
class Proposal2 {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="text")
     */
    protected $question;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $option1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $option2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $option3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $option4;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $option5;


    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $fav_city;


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
     * Set question
     *
     * @param string $question
     * @return Proposal2
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set option1
     *
     * @param string $option1
     * @return Proposal2
     */
    public function setOption1($option1)
    {
        $this->option1 = $option1;
    
        return $this;
    }

    /**
     * Get option1
     *
     * @return string 
     */
    public function getOption1()
    {
        return $this->option1;
    }

    /**
     * Set option2
     *
     * @param string $option2
     * @return Proposal2
     */
    public function setOption2($option2)
    {
        $this->option2 = $option2;
    
        return $this;
    }

    /**
     * Get option2
     *
     * @return string 
     */
    public function getOption2()
    {
        return $this->option2;
    }

    /**
     * Set option3
     *
     * @param string $option3
     * @return Proposal2
     */
    public function setOption3($option3)
    {
        $this->option3 = $option3;
    
        return $this;
    }

    /**
     * Get option3
     *
     * @return string 
     */
    public function getOption3()
    {
        return $this->option3;
    }

    /**
     * Set option4
     *
     * @param string $option4
     * @return Proposal2
     */
    public function setOption4($option4)
    {
        $this->option4 = $option4;
    
        return $this;
    }

    /**
     * Get option4
     *
     * @return string 
     */
    public function getOption4()
    {
        return $this->option4;
    }

    /**
     * Set option5
     *
     * @param string $option5
     * @return Proposal2
     */
    public function setOption5($option5)
    {
        $this->option5 = $option5;
    
        return $this;
    }

    /**
     * Get option5
     *
     * @return string 
     */
    public function getOption5()
    {
        return $this->option5;
    }

    /**
     * Set fav_city
     *
     * @param string $favCity
     * @return Proposal2
     */
    public function setFavCity($favCity)
    {
        $this->fav_city = $favCity;
    
        return $this;
    }

    /**
     * Get fav_city
     *
     * @return string 
     */
    public function getFavCity()
    {
        return $this->fav_city;
    }
}
