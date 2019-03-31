<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNGetRequest
 *
 * Request the enterprise level data associated with Voice VPN.
 *                 The response is either a EnterpriseVoiceVPNGetResponse or an ErrorResponse.
 *                 Replaced By: EnterpriseVoiceVPNGetRequest14sp3
 *
 * @see EnterpriseVoiceVPNGetResponse
 * @see ErrorResponse
 * @see EnterpriseVoiceVPNGetRequest14sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:490","type":"sequence"}]
 */
class EnterpriseVoiceVPNGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:490
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

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


}

