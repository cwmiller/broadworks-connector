<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderZoneCallingRestrictionsGetRequest
 *
 * Gets the Service Provider/Enterprise level Zone Calling Restrictions Policies.
 *         The response is ServiceProviderZoneCallingRestrictionsGetResponse or an
 * ErrorResponse.
 */
class ServiceProviderZoneCallingRestrictionsGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }


}

