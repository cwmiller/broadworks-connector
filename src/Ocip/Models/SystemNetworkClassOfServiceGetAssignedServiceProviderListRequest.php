<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNetworkClassOfServiceGetAssignedServiceProviderListRequest
 *
 * Request a list of service providers that have a given Network Class
 *         of Service assigned.
 *         The response is either a
 *         SystemNetworkClassOfServiceGetAssignedServiceProviderListResponse or
 *         ErrorResponse.
 *
 * @see SystemNetworkClassOfServiceGetAssignedServiceProviderListResponse
 * @see ErrorResponse
 */
class SystemNetworkClassOfServiceGetAssignedServiceProviderListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }


}

