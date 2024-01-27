<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * XsiPolicyProfileAssignEntry
 *
 * The Xsi policy profile assign entry contains multiple Xsi policy profile
 *         and one default xsi policy profile.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5843","type":"sequence"}]
 */
class XsiPolicyProfileAssignEntry
{
    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5843
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $name = [
        
    ];

    /**
     * @ElementName default
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5843
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $default = null;

    /**
     * Getter for name
     *
     * @return string[]
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string[] $name
     * @return $this
     */
    public function setName(array $name)
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
     * Adder for name
     *
     * @param string $name
     * @return $this
     */
    public function addName(string $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * Getter for default
     *
     * @return string
     */
    public function getDefault()
    {
        return $this->default instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->default;
    }

    /**
     * Setter for default
     *
     * @param string $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDefault()
    {
        $this->default = null;
        return $this;
    }
}

