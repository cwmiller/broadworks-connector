<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse
 *
 * Response to EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest.
 *
 * @see EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:227","type":"sequence"}]
 */
class EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName trunkGroup
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey
     * @Array
     * @Optional
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:227
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    protected $trunkGroup = [
        
    ];

    /**
     * Getter for trunkGroup
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[]
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroup;
    }

    /**
     * Setter for trunkGroup
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey[] $trunkGroup
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkTrunkGroupKey $trunkGroup
     * @return $this
     */
    public function addTrunkGroup($trunkGroup)
    {
        $this->trunkGroup[] = $trunkGroup;
        return $this;
    }
}

