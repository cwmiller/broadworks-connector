<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceRequest14sp4
 *
 * Get a Trunk Group Instance's profile.
 *         The response is either a GroupTrunkGroupGetInstanceResponse14sp4 or an ErrorResponse.
 *
 * @see GroupTrunkGroupGetInstanceResponse14sp4
 * @see ErrorResponse
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:14095","type":"sequence"}]
 */
class GroupTrunkGroupGetInstanceRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName trunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Group ab0042aa512abc10edb3c55e4b416b0b:14095
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $trunkGroupKey = null;

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

