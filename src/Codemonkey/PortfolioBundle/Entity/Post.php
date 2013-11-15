<?php

    namespace Codemonkey\PortfolioBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * Post
     *
     * @ORM\Table(name="cm_post")
     * @ORM\Entity
     */
    class Post{
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
        private $title;

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
         * @ORM\Column(type="date")
         */
        private $date;

        /**
         * @ORM\Column(type="text")
         */
        private $body;

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
         * Set title
         *
         * @param string $title
         * @return Post
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
         * Set date
         *
         * @param \DateTime $date
         * @return Post
         */
        public function setDate($date)
        {
            $this->date = $date;

            return $this;
        }

        /**
         * Get date
         *
         * @return \DateTime
         */
        public function getDate()
        {
            return $this->date;
        }

        /**
         * Set body
         *
         * @param string $body
         * @return Post
         */
        public function setBody($body)
        {
            $this->body = $body;

            return $this;
        }

        /**
         * Get body
         *
         * @return string
         */
        public function getBody()
        {
            return $this->body;
        }
    
    /**
     * Set image
     *
     * @param string $image
     * @return Post
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image->getUrl();
    }

    /**
     * Set media
     *
     * @param \Codemonkey\PortfolioBundle\Entity\Image $media
     * @return Post
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
        return $this->media->getUrl();
    }

    /**
     * Set thumb
     *
     * @param \Codemonkey\PortfolioBundle\Entity\Image $thumb
     * @return Post
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
     * @return Post
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
}