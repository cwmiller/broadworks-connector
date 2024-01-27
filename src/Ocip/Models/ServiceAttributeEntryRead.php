<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceAttributeEntryRead
 *
 * The service attributes name and value pair.
 *
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:20266","type":"sequence"}]
 */
class ServiceAttributeEntryRead
{
    /**
     * @ElementName name
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:20266
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName value
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:20266
     * @MinLength 1
     * @MaxLength 2048
     * @var string|null
     */
    protected $value = null;

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

