<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixActivateListRequest
 *
 * Activate number prefixes in a service provider.
 *         It is not an error to activate an already activated number prefix. 
 *         The command fails if executed when system level enterprise trunk number prefix activation is disabled.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"1b22a3a92e05eea2e752345aa4faa131:433","type":"sequence"}]
 */
class ServiceProviderRouteListEnterpriseTrunkNumberPrefixActivateListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 1b22a3a92e05eea2e752345aa4faa131:433
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName numberPrefix
     * @Type string
     * @Array
     * @Group 1b22a3a92e05eea2e752345aa4faa131:433
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

