<?php

namespace BrewBlogger\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brewingcss
 *
 * @ORM\Table(name="brewingcss")
 * @ORM\Entity
 */
class Brewingcss
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=250, nullable=false)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="themeName", type="string", length=250, nullable=true)
     */
    private $themename;

    /**
     * @var string
     *
     * @ORM\Column(name="themeColor1", type="string", length=250, nullable=true)
     */
    private $themecolor1;

    /**
     * @var string
     *
     * @ORM\Column(name="themeColor2", type="string", length=250, nullable=true)
     */
    private $themecolor2;



    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set theme
     *
     * @param string $theme
     * @return Brewingcss
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    
        return $this;
    }

    /**
     * Get theme
     *
     * @return string 
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set themename
     *
     * @param string $themename
     * @return Brewingcss
     */
    public function setThemename($themename)
    {
        $this->themename = $themename;
    
        return $this;
    }

    /**
     * Get themename
     *
     * @return string 
     */
    public function getThemename()
    {
        return $this->themename;
    }

    /**
     * Set themecolor1
     *
     * @param string $themecolor1
     * @return Brewingcss
     */
    public function setThemecolor1($themecolor1)
    {
        $this->themecolor1 = $themecolor1;
    
        return $this;
    }

    /**
     * Get themecolor1
     *
     * @return string 
     */
    public function getThemecolor1()
    {
        return $this->themecolor1;
    }

    /**
     * Set themecolor2
     *
     * @param string $themecolor2
     * @return Brewingcss
     */
    public function setThemecolor2($themecolor2)
    {
        $this->themecolor2 = $themecolor2;
    
        return $this;
    }

    /**
     * Get themecolor2
     *
     * @return string 
     */
    public function getThemecolor2()
    {
        return $this->themecolor2;
    }
}