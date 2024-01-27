<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * XsiPolicyProfileUnassignEntry
 *
 * The Xsi policy profile unassign entry contains mutiltipe Xsi policy profile
 *         and a new replacement default xsi policy profile.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5868","type":"sequence"}]
 */
class XsiPolicyProfileUnassignEntry
{
    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5868
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $name = [
        
    ];

    /**
     * @ElementName newDefault
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5868
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $newDefault = null;

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
     * Getter for newDefault
     *
     * @return string
     */
    public function getNewDefault()
    {
        return $this->newDefault instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newDefault;
    }

    /**
     * Setter for newDefault
     *
     * @param string $newDefault
     * @return $this
     */
    public function setNewDefault($newDefault)
    {
        $this->newDefault = $newDefault;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewDefault()
    {
        $this->newDefault = null;
        return $this;
    }
}

