<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixDeactivateListRequest
 *
 * Deactivate number prefixes in a service provider.
 *         It is not an error to deactivate an already deactivated number prefix. 
 *         The command fails if executed when system level enterprise trunk number
 * prefix activation is disabled.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderRouteListEnterpriseTrunkNumberPrefixDeactivateListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName numberPrefix
     * @var string[]
     */
    private $numberPrefix = array(
        
    );

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

    /**
     * Getter for numberPrefix
     *
     * @ElementName numberPrefix
     * @return string[]
     */
    public function getNumberPrefix()
    {
        return $this->numberPrefix;
    }

    /**
     * Setter for numberPrefix
     *
     * @ElementName numberPrefix
     * @param string[] $numberPrefix
     * @return $this
     */
    public function setNumberPrefix($numberPrefix)
    {
        $this->numberPrefix = $numberPrefix;
        return $this;
    }

    /**
     * Adder for numberPrefix
     *
     * @ElementName numberPrefix
     * @param string $numberPrefix
     * @return $this
     */
    public function addNumberPrefix($numberPrefix)
    {
        $this->numberPrefix []= $numberPrefix;
        return $this;
    }


}

