<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementGroupEnterpriseTrunkTrunkGroupList
 *
 * A list of Group Trunk Krunk Group Names that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:2022","type":"sequence"}]
 */
class ReplacementGroupEnterpriseTrunkTrunkGroupList
{

    /**
     * @ElementName trunkGroup
     * @Type string
     * @Array
     * @Group b9c14e2d80e4e7749688ca13ba233b44:2022
     * @MinLength 1
     * @MaxLength 30
     * @var string[]
     */
    private $trunkGroup = array(
        
    );

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

