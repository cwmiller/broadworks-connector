<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskGetListRequest14sp4
 *
 * Get the list of user creation tasks for a trunk group.
 *         The response is either GroupTrunkGroupUserCreationTaskGetListResponse14sp4 or ErrorResponse.
 *
 * @see GroupTrunkGroupUserCreationTaskGetListResponse14sp4
 * @see ErrorResponse
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:1533","type":"sequence"}]
 */
class GroupTrunkGroupUserCreationTaskGetListRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName trunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:1533
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    protected $trunkGroupKey = null;

    /**
     * Getter for trunkGroupKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupKey;
    }

    /**
     * Setter for trunkGroupKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $trunkGroupKey
     * @return $this
     */
    public function setTrunkGroupKey(\CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $trunkGroupKey)
    {
        $this->trunkGroupKey = $trunkGroupKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupKey()
    {
        $this->trunkGroupKey = null;
        return $this;
    }
}

