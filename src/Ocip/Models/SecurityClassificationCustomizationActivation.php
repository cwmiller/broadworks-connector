<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SecurityClassificationCustomizationActivation
 *
 * The security classification customization activation.
 */
class SecurityClassificationCustomizationActivation
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName isCustomized
     * @var bool|null
     */
    private $isCustomized = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for isCustomized
     *
     * @ElementName isCustomized
     * @return bool|null
     */
    public function getIsCustomized()
    {
        return $this->isCustomized;
    }

    /**
     * Setter for isCustomized
     *
     * @ElementName isCustomized
     * @param bool|null $isCustomized
     * @return $this
     */
    public function setIsCustomized($isCustomized)
    {
        $this->isCustomized = $isCustomized;
        return $this;
    }


}

