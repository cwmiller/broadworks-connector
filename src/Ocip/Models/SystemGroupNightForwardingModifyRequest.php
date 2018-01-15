<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemGroupNightForwardingModifyRequest
 *
 * Request to modify the Group Night Forwarding system parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemGroupNightForwardingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName nightForwardGroupCallsWithinEnterprise
     * @var bool|null
     */
    private $nightForwardGroupCallsWithinEnterprise = null;

    /**
     * Getter for nightForwardGroupCallsWithinEnterprise
     *
     * @ElementName nightForwardGroupCallsWithinEnterprise
     * @return bool|null
     */
    public function getNightForwardGroupCallsWithinEnterprise()
    {
        return $this->nightForwardGroupCallsWithinEnterprise;
    }

    /**
     * Setter for nightForwardGroupCallsWithinEnterprise
     *
     * @ElementName nightForwardGroupCallsWithinEnterprise
     * @param bool|null $nightForwardGroupCallsWithinEnterprise
     * @return $this
     */
    public function setNightForwardGroupCallsWithinEnterprise($nightForwardGroupCallsWithinEnterprise)
    {
        $this->nightForwardGroupCallsWithinEnterprise = $nightForwardGroupCallsWithinEnterprise;
        return $this;
    }


}

