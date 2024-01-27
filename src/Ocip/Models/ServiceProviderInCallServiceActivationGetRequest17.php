<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderInCallServiceActivationGetRequest17
 *
 * Request the service provider's DTMF based in-call service activation trigger attributes.The response is either a ServiceProviderInCallServiceActivationGetResponse17 or an ErrorResponse.
 *
 * @see ServiceProviderInCallServiceActivationGetResponse17
 * @see ErrorResponse
 * @Groups [{"id":"2f2cc47dc637fa680d158d93a58af0fd:46","type":"sequence"}]
 */
class ServiceProviderInCallServiceActivationGetRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 2f2cc47dc637fa680d158d93a58af0fd:46
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

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

