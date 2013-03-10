<?php

namespace BrewBlogger\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="newsHeadline", type="string", length=250, nullable=true)
     */
    private $newsheadline;

    /**
     * @var string
     *
     * @ORM\Column(name="newsText", type="text", nullable=true)
     */
    private $newstext;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="newsDate", type="date", nullable=true)
     */
    private $newsdate;

    /**
     * @var string
     *
     * @ORM\Column(name="newsPrivate", type="string", length=1, nullable=true)
     */
    private $newsprivate;

    /**
     * @var string
     *
     * @ORM\Column(name="newsPoster", type="string", length=250, nullable=true)
     */
    private $newsposter;



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
     * Set newsheadline
     *
     * @param string $newsheadline
     * @return News
     */
    public function setHeadline($newsheadline)
    {
        $this->newsheadline = $newsheadline;
    
        return $this;
    }

    /**
     * Get newsheadline
     *
     * @return string 
     */
    public function getHeadline()
    {
        return $this->newsheadline;
    }

    /**
     * Set newstext
     *
     * @param string $newstext
     * @return News
     */
    public function setText($newstext)
    {
        $this->newstext = $newstext;
    
        return $this;
    }

    /**
     * Get newstext
     *
     * @return string 
     */
    public function getText()
    {
        return $this->newstext;
    }

    /**
     * Set newsdate
     *
     * @param \DateTime $newsdate
     * @return News
     */
    public function setDate($newsdate)
    {
        $this->newsdate = $newsdate;
    
        return $this;
    }

    /**
     * Get newsdate
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->newsdate;
    }

    /**
     * Set newsprivate
     *
     * @param string $newsprivate
     * @return News
     */
    public function setPrivate($newsprivate)
    {
        $this->newsprivate = $newsprivate;
    
        return $this;
    }

    /**
     * Get newsprivate
     *
     * @return string 
     */
    public function getPrivate()
    {
        return $this->newsprivate;
    }

    /**
     * Set newsposter
     *
     * @param string $newsposter
     * @return News
     */
    public function setPoster($newsposter)
    {
        $this->newsposter = $newsposter;
    
        return $this;
    }

    /**
     * Get newsposter
     *
     * @return string 
     */
    public function getPoster()
    {
        return $this->newsposter;
    }
}