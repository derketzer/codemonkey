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
         * @ORM\OneToOne(targetEntity="PostType")
         * @ORM\JoinColumn(name="id_post_type", referencedColumnName="id")
         */
        private $postType;

        /**
         * @ORM\ManyToOne(targetEntity="PostCategory")
         * @ORM\JoinColumn(name="id_post_category", referencedColumnName="id")
         */
        private $postCategory;

        /**
         * @ORM\ManyToMany(targetEntity="Image")
         * @ORM\JoinTable(name="cm_post_gallery",
         *      joinColumns={@ORM\JoinColumn(name="id_post", referencedColumnName="id")},
         *      inverseJoinColumns={@ORM\JoinColumn(name="id_media", referencedColumnName="id", unique=true)}
         *      )
         */
        private $gallery;

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
         * @ORM\ManyToMany(targetEntity="PostTag")
         * @ORM\JoinColumn(name="id_tag", referencedColumnName="id")
         */
        private $tags;

        /**
         * @ORM\Column(type="date")
         */
        private $date;

        /**
         * @ORM\Column(type="string", options={"default" = ""})
         */
        private $friendlyUrl;

        /**
         * @ORM\Column(type="string", length=255)
         */
        private $intro;

        /**
         * @ORM\Column(type="text", options={"default" = ""})
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

    /**
     * Set postType
     *
     * @param \Codemonkey\PortfolioBundle\Entity\PostType $postType
     * @return Post
     */
    public function setPostType(\Codemonkey\PortfolioBundle\Entity\PostType $postType = null)
    {
        $this->postType = $postType;
    
        return $this;
    }

    /**
     * Get postType
     *
     * @return \Codemonkey\PortfolioBundle\Entity\PostType 
     */
    public function getPostType()
    {
        return $this->postType;
    }

    /**
     * Set friendlyUrl
     *
     * @param string $friendlyUrl
     * @return Post
     */
    public function setFriendlyUrl($friendlyUrl)
    {
        $this->friendlyUrl = $friendlyUrl;
    
        return $this;
    }

    /**
     * Get friendlyUrl
     *
     * @return string 
     */
    public function getFriendlyUrl()
    {
        return $this->friendlyUrl;
    }

    /**
     * Set postCategory
     *
     * @param \Codemonkey\PortfolioBundle\Entity\PostCategory $postCategory
     * @return Post
     */
    public function setPostCategory(\Codemonkey\PortfolioBundle\Entity\PostCategory $postCategory = null)
    {
        $this->postCategory = $postCategory;
    
        return $this;
    }

    /**
     * Get postCategory
     *
     * @return \Codemonkey\PortfolioBundle\Entity\PostCategory 
     */
    public function getPostCategory()
    {
        return $this->postCategory;
    }

    /**
     * Set tags
     *
     * @param \Codemonkey\PortfolioBundle\Entity\PostTag $tags
     * @return Post
     */
    public function setTags(\Codemonkey\PortfolioBundle\Entity\PostTag $tags = null)
    {
        $this->tags = $tags;
    
        return $this;
    }

    /**
     * Get tags
     *
     * @return \Codemonkey\PortfolioBundle\Entity\PostTag 
     */
    public function getTags()
    {
        return $this->tags;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add tags
     *
     * @param \Codemonkey\PortfolioBundle\Entity\PostTag $tags
     * @return Post
     */
    public function addTag(\Codemonkey\PortfolioBundle\Entity\PostTag $tags)
    {
        $this->tags[] = $tags;
    
        return $this;
    }

    /**
     * Remove tags
     *
     * @param \Codemonkey\PortfolioBundle\Entity\PostTag $tags
     */
    public function removeTag(\Codemonkey\PortfolioBundle\Entity\PostTag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Set intro
     *
     * @param string $intro
     * @return Post
     */
    public function setIntro($intro)
    {
        $this->intro = $intro;
    
        return $this;
    }

    /**
     * Get intro
     *
     * @return string 
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * Set gallery
     *
     * @param \Codemonkey\PortfolioBundle\Entity\PostGallery $gallery
     * @return Post
     */
    public function setGallery(\Codemonkey\PortfolioBundle\Entity\PostGallery $gallery = null)
    {
        $this->gallery = $gallery;
    
        return $this;
    }

    /**
     * Get gallery
     *
     * @return \Codemonkey\PortfolioBundle\Entity\PostGallery 
     */
    public function getGallery()
    {
        return $this->gallery;
    }

    /**
     * Add gallery
     *
     * @param \Codemonkey\PortfolioBundle\Entity\PostGallery $gallery
     * @return Post
     */
    public function addGallery(\Codemonkey\PortfolioBundle\Entity\PostGallery $gallery)
    {
        $this->gallery[] = $gallery;
    
        return $this;
    }

    /**
     * Remove gallery
     *
     * @param \Codemonkey\PortfolioBundle\Entity\PostGallery $gallery
     */
    public function removeGallery(\Codemonkey\PortfolioBundle\Entity\PostGallery $gallery)
    {
        $this->gallery->removeElement($gallery);
    }
}