<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * XsiPolicyProfileUnassignEntry
 *
 * The Xsi policy profile unassign entry contains mutiltipe Xsi policy profile
 *         and a new replacement default xsi policy profile.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:5388","type":"sequence"}]
 */
class XsiPolicyProfileUnassignEntry
{

    /**
     * @ElementName name
     * @Type string
     * @Array
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:5388
     * @MinLength 1
     * @MaxLength 40
     * @var string[]
     */
    protected $name = array(
        
    );

    /**
     * @ElementName newDefault
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:5388
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

