<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderLDAPIntegrationGetDirectoryRequest
 *
 * Get the LDAP directory attributes for a service provider.
 *         The response is either a
 * ServiceProviderLDAPIntegrationGetDirectoryResponse or an ErrorResponse.
 */
class ServiceProviderLDAPIntegrationGetDirectoryRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

