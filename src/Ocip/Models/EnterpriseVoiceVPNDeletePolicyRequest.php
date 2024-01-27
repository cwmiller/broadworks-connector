<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNDeletePolicyRequest
 *
 * Delete a enterprise voice VPN location.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"405ec18fe08719ecf74e749d7e18c88f:1032","type":"sequence"}]
 */
class EnterpriseVoiceVPNDeletePolicyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1032
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName locationDialingCode
     * @Type string
     * @Group 405ec18fe08719ecf74e749d7e18c88f:1032
     * @MinLength 1
     * @MaxLength 22
     * @var string|null
     */
    protected $locationDialingCode = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for locationDialingCode
     *
     * @return string
     */
    public function getLocationDialingCode()
    {
        return $this->locationDialingCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->locationDialingCode;
    }

    /**
     * Setter for locationDialingCode
     *
     * @param string $locationDialingCode
     * @return $this
     */
    public function setLocationDialingCode($locationDialingCode)
    {
        $this->locationDialingCode = $locationDialingCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLocationDialingCode()
    {
        $this->locationDialingCode = null;
        return $this;
    }
}

