<?php

    namespace Codemonkey\PortfolioBundle\Entity;

    use Doctrine\ORM\Mapping as ORM;

    /**
     * Post
     *
     * @ORM\Table(name="blog_post")
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
         * @ORM\Column(type="string", length=100)
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
        return $this->image;
    }
}