<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePolicyAttributeEntry
 *
 * The service policy attributes name and value pair.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3756","type":"sequence"}]
 */
class ServicePolicyAttributeEntry
{

    /**
     * @ElementName name
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3756
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName value
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3756
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    private $value = null;

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
     * Getter for value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetValue()
    {
        $this->value = null;
        return $this;
    }


}

