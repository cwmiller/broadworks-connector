<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupStirShakenGetRequest23
 *
 * Get Group Trunk Group Stir Shaken service settings.
 *         The response is either GroupTrunkGroupStirShakenGetResponse23 or ErrorResponse.
 *
 * @see GroupTrunkGroupStirShakenGetResponse23
 * @see ErrorResponse
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:8262","type":"sequence"}]
 */
class GroupTrunkGroupStirShakenGetRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName trunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Group 4b0e7857796c636464362260a2f8e5ee:8262
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

