<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServicePolicyAttributeModifyEntry
 *
 * The service policy attributes name and value pair.
 */
class ServicePolicyAttributeModifyEntry
{

    /**
     * @ElementName name
     * @Type string
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName value
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param string|null $value
     * @return $this
     */
    public function setValue($value)
    {
        if ($value === null) {
            $this->value = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->value = $value;
        }
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

