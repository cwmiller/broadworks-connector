<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementEnterpriseTrunkTrunkGroupList
 *
 * A list of Group Trunk Krunk Group Names that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:1998","type":"sequence"}]
 */
class ReplacementEnterpriseTrunkTrunkGroupList
{
    /**
     * @ElementName trunkGroup
     * @Type string
     * @Array
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1998
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    protected $trunkGroup = [
        
    ];

    /**
     * Getter for trunkGroup
     *
     * @return string[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @param string[] $trunkGroup
     * @return $this
     */
    public function setTrunkGroup(array $trunkGroup)
    {
        $this->trunkGroup = $trunkGroup;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroup()
    {
        $this->trunkGroup = null;
        return $this;
    }

    /**
     * Adder for trunkGroup
     *
     * @param string $trunkGroup
     * @return $this
     */
    public function addTrunkGroup(string $trunkGroup)
    {
        $this->trunkGroup[] = $trunkGroup;
        return $this;
    }
}

