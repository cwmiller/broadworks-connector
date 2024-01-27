<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderLanguageGetAvailableListRequest
 *
 * Request the list of languages that a user or admin in a service provider is allowed to use.  
 *         The list will either be the system or service provider languages list, depending on the useServiceProviderLanguages flag.
 *         The response is either a ServiceProviderLanguageGetAvailableListResponse or an ErrorResponse.
 *
 * @see ServiceProviderLanguageGetAvailableListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:4851","type":"sequence"}]
 */
class ServiceProviderLanguageGetAvailableListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:4851
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

