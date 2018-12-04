<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderIMRNGetListRequest
 *
 * Returns a list of dns or dn ranges in a service provider IMRN pool.
 *         The response is either ServiceProviderIMRNGetListResponse or ErrorResponse.
 *
 * @see ServiceProviderIMRNGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"8f3ed38751e86ebcc639b5bc5cdef0ec:3699","type":"sequence"}]
 */
class ServiceProviderIMRNGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 8f3ed38751e86ebcc639b5bc5cdef0ec:3699
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

