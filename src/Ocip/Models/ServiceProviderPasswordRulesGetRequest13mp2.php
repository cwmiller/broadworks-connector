<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderPasswordRulesGetRequest13mp2
 *
 * Requests the service provider's password rules setting applicable to
 *         Administrators (Group and Department) and Users.
 *         The response is either ServiceProviderPasswordRulesGetResponse13mp2 or ErrorResponse.
 *         Replaced By: ServiceProviderPasswordRulesGetRequest16
 *
 * @see ServiceProviderPasswordRulesGetResponse13mp2
 * @see ErrorResponse
 * @see ServiceProviderPasswordRulesGetRequest16
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19551","type":"sequence"}]
 */
class ServiceProviderPasswordRulesGetRequest13mp2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:19551
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

