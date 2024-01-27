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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16916","type":"sequence"}]
 */
class SystemSIPAuthenticationTrunkGroupLockoutClearRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName trunkGroupkey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey
     * @Array
     * @Group da582a1f8028404e70d260cf1f891033:16916
     * @var \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey[]
     */
    protected $trunkGroupkey = [
        
    ];

    /**
     * Getter for trunkGroupkey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey[]
     */
    public function getTrunkGroupkey()
    {
        return $this->trunkGroupkey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->trunkGroupkey;
    }

    /**
     * Setter for trunkGroupkey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey[] $trunkGroupkey
     * @return $this
     */
    public function setTrunkGroupkey(array $trunkGroupkey)
    {
        $this->trunkGroupkey = $trunkGroupkey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTrunkGroupkey()
    {
        $this->trunkGroupkey = null;
        return $this;
    }

    /**
     * Adder for trunkGroupkey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TrunkGroupKey $trunkGroupkey
     * @return $this
     */
    public function addTrunkGroupkey($trunkGroupkey)
    {
        $this->trunkGroupkey[] = $trunkGroupkey;
        return $this;
    }
}

