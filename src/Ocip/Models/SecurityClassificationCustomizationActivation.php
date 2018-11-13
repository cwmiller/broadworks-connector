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
     * @Type string
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName isCustomized
     * @Type bool
     * @var bool|null
     */
    private $isCustomized = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for isCustomized
     *
     * @return bool
     */
    public function getIsCustomized()
    {
        return $this->isCustomized instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCustomized;
    }

    /**
     * Setter for isCustomized
     *
     * @param bool $isCustomized
     * @return $this
     */
    public function setIsCustomized($isCustomized)
    {
        $this->isCustomized = $isCustomized;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCustomized()
    {
        $this->isCustomized = null;
        return $this;
    }


}

