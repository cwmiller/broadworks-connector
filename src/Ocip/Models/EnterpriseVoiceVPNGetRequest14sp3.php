<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVoiceVPNGetRequest14sp3
 *
 * Request the enterprise level data associated with Voice VPN.
 *         The response is either a EnterpriseVoiceVPNGetResponse14sp3 or an ErrorResponse.
 *
 * @see EnterpriseVoiceVPNGetResponse14sp3
 * @see ErrorResponse
 * @Groups [{"id":"b561eca19800e0898f471e5e91eb3baa:1481","type":"sequence"}]
 */
class EnterpriseVoiceVPNGetRequest14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group b561eca19800e0898f471e5e91eb3baa:1481
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

