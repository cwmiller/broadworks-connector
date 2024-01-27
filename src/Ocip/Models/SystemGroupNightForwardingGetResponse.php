<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGroupNightForwardingGetResponse
 *
 * Response to SystemGroupNightForwardingGetRequest.
 *
 * @see SystemGroupNightForwardingGetRequest
 * @Groups [{"id":"65f35694d7d3354987bf6387ab55bfc6:116","type":"sequence"}]
 */
class SystemGroupNightForwardingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName nightForwardInterGroupCallsWithinEnterprise
     * @Type bool
     * @Group 65f35694d7d3354987bf6387ab55bfc6:116
     * @var bool|null
     */
    protected $nightForwardInterGroupCallsWithinEnterprise = null;

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

