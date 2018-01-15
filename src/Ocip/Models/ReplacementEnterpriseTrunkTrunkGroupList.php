<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementEnterpriseTrunkTrunkGroupList
 *
 * A list of Group Trunk Krunk Group Names that replaces a previously configured
 * list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementEnterpriseTrunkTrunkGroupList
{

    /**
     * @ElementName trunkGroup
     * @var string[]
     */
    private $trunkGroup = array(
        
    );

    /**
     * Getter for trunkGroup
     *
     * @ElementName trunkGroup
     * @return string[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @ElementName trunkGroup
     * @param string[] $trunkGroup
     * @return $this
     */
    public function setTrunkGroup($trunkGroup)
    {
        $this->trunkGroup = $trunkGroup;
        return $this;
    }

    /**
     * Adder for trunkGroup
     *
     * @ElementName trunkGroup
     * @param string $trunkGroup
     * @return $this
     */
    public function addTrunkGroup($trunkGroup)
    {
        $this->trunkGroup []= $trunkGroup;
        return $this;
    }


}

