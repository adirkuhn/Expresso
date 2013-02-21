<?php

namespace Expresso\AppManagerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expresso\AppManagerBundle\Entity\App
 */
class App
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $namespace
     */
    private $namespace;

    /**
     * @var string $description
     */
    private $description;

    /**
     * @var string $license
     */
    private $license;

    /**
     * @var string $targetDir
     */
    private $targetDir;

    /**
     * @var string $active
     */
    private $active;


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
     * Set name
     *
     * @param string $name
     *
     * @return App
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
     * Set namespace
     *
     * @param string $namespace
     *
     * @return App
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    
        return $this;
    }

    /**
     * Get namespace
     *
     * @return string 
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return App
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
     * Set license
     *
     * @param string $license
     *
     * @return App
     */
    public function setLicense($license)
    {
        $this->license = $license;
    
        return $this;
    }

    /**
     * Get license
     *
     * @return string 
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set targetDir
     *
     * @param string $targetDir
     *
     * @return App
     */
    public function setTargetDir($targetDir)
    {
        $this->targetDir = $targetDir;
    
        return $this;
    }

    /**
     * Get targetDir
     *
     * @return string 
     */
    public function getTargetDir()
    {
        return $this->targetDir;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return App
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}
