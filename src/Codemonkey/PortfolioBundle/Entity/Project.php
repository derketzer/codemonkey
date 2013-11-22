<?php

    namespace Codemonkey\PortfolioBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * Post
     *
     * @ORM\Table(name="cm_project")
     * @ORM\Entity
     */
    class Project{
    	/**
         * @var integer
         *
         * @ORM\Column(name="id", type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        private $id;

        /**
         * @ORM\Column(type="string", length=100)
         */
        private $company;

        /**
         * @ORM\Column(type="string", length=50)
         */
        private $name;

        /**
         * @ORM\ManyToOne(targetEntity="Image")
         * @ORM\JoinColumn(name="id_thumb", referencedColumnName="id")
         */
        private $thumb;

        /**
         * @ORM\ManyToOne(targetEntity="Image")
         * @ORM\JoinColumn(name="id_media", referencedColumnName="id")
         */
        private $image;

        /**
         * @ORM\ManyToMany(targetEntity="ProjectDescription")
         */
        private $description;

        /**
         * @ORM\Column(type="date")
         */
        private $deliveredDate;

        /**
         * @ORM\Column(type="integer", length=1, options={"default" = 0})
         */
        private $published;
    
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
     * Set company
     *
     * @param string $company
     * @return Project
     */
    public function setCompany($company)
    {
        $this->company = $company;
    
        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set shortDescription
     *
     * @param string $shortDescription
     * @return Project
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    
        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string 
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set deliveredDate
     *
     * @param \DateTime $deliveredDate
     * @return Project
     */
    public function setDeliveredDate($deliveredDate)
    {
        $this->deliveredDate = $deliveredDate;
    
        return $this;
    }

    /**
     * Get deliveredDate
     *
     * @return \DateTime 
     */
    public function getDeliveredDate()
    {
        return $this->deliveredDate;
    }

    /**
     * Set media
     *
     * @param \Codemonkey\PortfolioBundle\Entity\Image $media
     * @return Project
     */
    public function setMedia(\Codemonkey\PortfolioBundle\Entity\Image $media = null)
    {
        $this->media = $media;
    
        return $this;
    }

    /**
     * Get media
     *
     * @return \Codemonkey\PortfolioBundle\Entity\Image 
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set image
     *
     * @param \Codemonkey\PortfolioBundle\Entity\Image $image
     * @return Project
     */
    public function setImage(\Codemonkey\PortfolioBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \Codemonkey\PortfolioBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set thumb
     *
     * @param \Codemonkey\PortfolioBundle\Entity\Image $thumb
     * @return Project
     */
    public function setThumb(\Codemonkey\PortfolioBundle\Entity\Image $thumb = null)
    {
        $this->thumb = $thumb;
    
        return $this;
    }

    /**
     * Get thumb
     *
     * @return \Codemonkey\PortfolioBundle\Entity\Image 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set published
     *
     * @param integer $published
     * @return Project
     */
    public function setPublished($published)
    {
        $this->published = $published;
    
        return $this;
    }

    /**
     * Get published
     *
     * @return integer 
     */
    public function getPublished()
    {
        return $this->published;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projectDescriptions = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add projectDescriptions
     *
     * @param \Codemonkey\PortfolioBundle\Entity\Project_Description $projectDescriptions
     * @return Project
     */
    public function addProjectDescription(\Codemonkey\PortfolioBundle\Entity\Project_Description $projectDescriptions)
    {
        $this->projectDescriptions[] = $projectDescriptions;
    
        return $this;
    }

    /**
     * Remove projectDescriptions
     *
     * @param \Codemonkey\PortfolioBundle\Entity\Project_Description $projectDescriptions
     */
    public function removeProjectDescription(\Codemonkey\PortfolioBundle\Entity\Project_Description $projectDescriptions)
    {
        $this->projectDescriptions->removeElement($projectDescriptions);
    }

    /**
     * Get projectDescriptions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjectDescriptions()
    {
        return $this->projectDescriptions;
    }

    /**
     * Get projectDescription
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProjectDescription()
    {
        return $this->projectDescription;
    }

    /**
     * Add description
     *
     * @param \Codemonkey\PortfolioBundle\Entity\projectDescription $description
     * @return Project
     */
    public function addDescription(\Codemonkey\PortfolioBundle\Entity\projectDescription $description)
    {
        $this->description[] = $description;
    
        return $this;
    }

    /**
     * Remove description
     *
     * @param \Codemonkey\PortfolioBundle\Entity\projectDescription $description
     */
    public function removeDescription(\Codemonkey\PortfolioBundle\Entity\projectDescription $description)
    {
        $this->description->removeElement($description);
    }
}