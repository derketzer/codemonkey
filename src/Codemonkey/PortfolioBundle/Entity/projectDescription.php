<?php

namespace Codemonkey\PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="cm_project_description")
 * @ORM\Entity
 */
class projectDescription{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $shortDescriptions;

    /**
     * @ORM\Column(type="text")
     * @ORM\ManyToMany(targetEntity="Project", mappedBy="id_project")
     */
    private $projectDescription;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $locale;

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
     * Set shortDescriptions
     *
     * @param string $shortDescriptions
     * @return Project_Description
     */
    public function setShortDescriptions($shortDescriptions)
    {
        $this->shortDescriptions = $shortDescriptions;

        return $this;
    }

    /**
     * Get shortDescriptions
     *
     * @return string
     */
    public function getShortDescriptions()
    {
        return $this->shortDescriptions;
    }

    /**
     * Set descriptions
     *
     * @param string $descriptions
     * @return Project_Description
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;

        return $this;
    }

    /**
     * Get descriptions
     *
     * @return string
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Set locale
     *
     * @param string $locale
     * @return Project_Description
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set projectDescription
     *
     * @param string $projectDescription
     * @return Project_Description
     */
    public function setProjectDescription($projectDescription)
    {
        $this->projectDescription = $projectDescription;

        return $this;
    }

    /**
     * Get projectDescription
     *
     * @return string
     */
    public function getProjectDescription()
    {
        return $this->projectDescription;
    }
}