<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupDeleteInstanceRequest14sp4
 *
 * Delete a Trunk Group Instance from a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupDeleteInstanceRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName trunkGroupKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    private $trunkGroupKey = null;

    /**
     * Getter for trunkGroupKey
     *
     * @ElementName trunkGroupKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey;
    }

    /**
     * Setter for trunkGroupKey
     *
     * @ElementName trunkGroupKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey|null $trunkGroupKey
     * @return $this
     */
    public function setTrunkGroupKey($trunkGroupKey)
    {
        $this->trunkGroupKey = $trunkGroupKey;
        return $this;
    }


}

