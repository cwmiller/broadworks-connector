<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupGetInstanceRequest15
 *
 * Get a Trunk Group Instance's profile.
 *             The response is either a GroupTrunkGroupGetInstanceResponse15 or an ErrorResponse.
 *             The response contains a hosted user table with column headings: "User Id", "Last Name",
 *             "First Name", "Hiragana Last Name", "Hiragana First Name".
 *
 * @see GroupTrunkGroupGetInstanceResponse15
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:14557","type":"sequence"}]
 */
class GroupTrunkGroupGetInstanceRequest15 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName trunkGroupKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Group d8f04177e438f303b41c211e518706bf:14557
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

