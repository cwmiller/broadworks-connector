<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSIPAuthenticationTrunkGroupLockoutClearRequest
 *
 * Request to clear sip authentication trunk group lockouts in the system.
 *          The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemSIPAuthenticationTrunkGroupLockoutClearRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName trunkGroupkey
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey[]
     */
    private $trunkGroupkey = array(
        
    );

    /**
     * Getter for trunkGroupkey
     *
     * @ElementName trunkGroupkey
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey[]
     */
    public function getTrunkGroupkey()
    {
        return $this->trunkGroupkey;
    }

    /**
     * Setter for trunkGroupkey
     *
     * @ElementName trunkGroupkey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey[] $trunkGroupkey
     * @return $this
     */
    public function setTrunkGroupkey(array $trunkGroupkey)
    {
        $this->trunkGroupkey = $trunkGroupkey;
        return $this;
    }

    /**
     * Adder for trunkGroupkey
     *
     * @ElementName trunkGroupkey
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $trunkGroupkey
     * @return $this
     */
    public function addTrunkGroupkey($trunkGroupkey)
    {
        $this->trunkGroupkey []= $trunkGroupkey;
        return $this;
    }


}

