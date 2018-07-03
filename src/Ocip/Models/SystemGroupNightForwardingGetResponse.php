<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGroupNightForwardingGetResponse
 *
 * Response to SystemGroupNightForwardingGetRequest.
 *
 * @see SystemGroupNightForwardingGetRequest
 */
class SystemGroupNightForwardingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName nightForwardInterGroupCallsWithinEnterprise
     * @var bool|null
     */
    private $nightForwardInterGroupCallsWithinEnterprise = null;

    /**
     * Getter for nightForwardInterGroupCallsWithinEnterprise
     *
     * @ElementName nightForwardInterGroupCallsWithinEnterprise
     * @return bool|null
     */
    public function getNightForwardInterGroupCallsWithinEnterprise()
    {
        return $this->nightForwardInterGroupCallsWithinEnterprise;
    }

    /**
     * Setter for nightForwardInterGroupCallsWithinEnterprise
     *
     * @ElementName nightForwardInterGroupCallsWithinEnterprise
     * @param bool|null $nightForwardInterGroupCallsWithinEnterprise
     * @return $this
     */
    public function setNightForwardInterGroupCallsWithinEnterprise($nightForwardInterGroupCallsWithinEnterprise)
    {
        $this->nightForwardInterGroupCallsWithinEnterprise = $nightForwardInterGroupCallsWithinEnterprise;
        return $this;
    }


}

