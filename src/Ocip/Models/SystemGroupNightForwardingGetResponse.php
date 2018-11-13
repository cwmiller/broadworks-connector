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
     * @Type bool
     * @var bool|null
     */
    private $nightForwardInterGroupCallsWithinEnterprise = null;

    /**
     * Getter for nightForwardInterGroupCallsWithinEnterprise
     *
     * @return bool
     */
    public function getNightForwardInterGroupCallsWithinEnterprise()
    {
        return $this->nightForwardInterGroupCallsWithinEnterprise instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nightForwardInterGroupCallsWithinEnterprise;
    }

    /**
     * Setter for nightForwardInterGroupCallsWithinEnterprise
     *
     * @param bool $nightForwardInterGroupCallsWithinEnterprise
     * @return $this
     */
    public function setNightForwardInterGroupCallsWithinEnterprise($nightForwardInterGroupCallsWithinEnterprise)
    {
        $this->nightForwardInterGroupCallsWithinEnterprise = $nightForwardInterGroupCallsWithinEnterprise;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNightForwardInterGroupCallsWithinEnterprise()
    {
        $this->nightForwardInterGroupCallsWithinEnterprise = null;
        return $this;
    }


}

