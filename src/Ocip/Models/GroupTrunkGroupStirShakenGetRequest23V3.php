<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupStirShakenGetRequest23V3
 *
 * Get Group Trunk Group Stir Shaken service settings.
 *         The response is either GroupTrunkGroupStirShakenGetResponse23V3 or ErrorResponse.
 *         Replaced by GroupTrunkGroupStirShakenGetRequest23V4.
 *
 * @see GroupTrunkGroupStirShakenGetResponse23V3
 * @see ErrorResponse
 * @see GroupTrunkGroupStirShakenGetRequest23V4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:18244","type":"sequence"}]
 */
class GroupTrunkGroupStirShakenGetRequest23V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName trunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Group d8f04177e438f303b41c211e518706bf:18244
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

