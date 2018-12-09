<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGroupNightForwardingModifyRequest
 *
 * Request to modify the Group Night Forwarding system parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7aa3724e3d252a8e4882cf2fcd9d3961:132","type":"sequence"}]
 */
class SystemGroupNightForwardingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName nightForwardGroupCallsWithinEnterprise
     * @Type bool
     * @Optional
     * @Group 7aa3724e3d252a8e4882cf2fcd9d3961:132
     * @var bool|null
     */
    private $nightForwardGroupCallsWithinEnterprise = null;

    /**
     * Getter for nightForwardGroupCallsWithinEnterprise
     *
     * @return bool
     */
    public function getNightForwardGroupCallsWithinEnterprise()
    {
        return $this->nightForwardGroupCallsWithinEnterprise instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nightForwardGroupCallsWithinEnterprise;
    }

    /**
     * Setter for nightForwardGroupCallsWithinEnterprise
     *
     * @param bool $nightForwardGroupCallsWithinEnterprise
     * @return $this
     */
    public function setNightForwardGroupCallsWithinEnterprise($nightForwardGroupCallsWithinEnterprise)
    {
        $this->nightForwardGroupCallsWithinEnterprise = $nightForwardGroupCallsWithinEnterprise;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNightForwardGroupCallsWithinEnterprise()
    {
        $this->nightForwardGroupCallsWithinEnterprise = null;
        return $this;
    }


}

