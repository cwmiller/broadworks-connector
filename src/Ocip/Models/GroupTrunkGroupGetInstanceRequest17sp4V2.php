<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceRequest17sp4V2
 *
 * Get a Trunk Group Instance's profile.
 *         The response is either a GroupTrunkGroupGetInstanceResponse17sp4V2 or an
 * ErrorResponse.
 *         The response contains a hosted user table with column headings: "User
 * Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 *      
 *         Replaced by: GroupTrunkGroupGetInstanceRequest19V2
 *
 * @see GroupTrunkGroupGetInstanceResponse17sp4
 * @see ErrorResponse
 * @see GroupTrunkGroupGetInstanceRequest19
 */
class GroupTrunkGroupGetInstanceRequest17sp4V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

