<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderZoneCallingRestrictionsGetRequest
 *
 * Gets the Service Provider/Enterprise level Zone Calling Restrictions Policies.
 *         The response is ServiceProviderZoneCallingRestrictionsGetResponse or an ErrorResponse.
 *
 * @see ServiceProviderZoneCallingRestrictionsGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"da5cd0d79ddb505982e08d164e405660:46","type":"sequence"}]
 */
class ServiceProviderZoneCallingRestrictionsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group da5cd0d79ddb505982e08d164e405660:46
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

