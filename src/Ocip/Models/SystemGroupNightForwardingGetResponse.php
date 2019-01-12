<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGroupNightForwardingGetResponse
 *
 * Response to SystemGroupNightForwardingGetRequest.
 *
 * @see SystemGroupNightForwardingGetRequest
 * @Groups [{"id":"1a3849774e8d2ffd90c3a2c57cbdd7a0:116","type":"sequence"}]
 */
class SystemGroupNightForwardingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName nightForwardInterGroupCallsWithinEnterprise
     * @Type bool
     * @Group 1a3849774e8d2ffd90c3a2c57cbdd7a0:116
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

