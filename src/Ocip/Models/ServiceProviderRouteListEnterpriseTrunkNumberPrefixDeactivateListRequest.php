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
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName numberPrefix
     * @Type string
     * @Array
     * @var string[]
     */
    private $numberPrefix = array(
        
    );

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

    /**
     * Getter for numberPrefix
     *
     * @return string[]
     */
    public function getNumberPrefix()
    {
        return $this->numberPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberPrefix;
    }

    /**
     * Setter for numberPrefix
     *
     * @param string[] $numberPrefix
     * @return $this
     */
    public function setNumberPrefix(array $numberPrefix)
    {
        $this->numberPrefix = $numberPrefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberPrefix()
    {
        $this->numberPrefix = null;
        return $this;
    }

    /**
     * Adder for numberPrefix
     *
     * @param string $numberPrefix
     * @return $this
     */
    public function addNumberPrefix(string $numberPrefix)
    {
        $this->numberPrefix[] = $numberPrefix;
        return $this;
    }


}

