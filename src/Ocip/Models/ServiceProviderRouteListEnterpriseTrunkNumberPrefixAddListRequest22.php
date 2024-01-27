<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixAddListRequest22
 *
 * Add number prefixes to a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:457","type":"sequence"}]
 */
class ServiceProviderRouteListEnterpriseTrunkNumberPrefixAddListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 500f9871ed90b8ab3fbd262883ab503b:457
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName prefix
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberPrefix22
     * @Array
     * @Group 500f9871ed90b8ab3fbd262883ab503b:457
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberPrefix22[]
     */
    protected $prefix = [
        
    ];

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
     * Getter for prefix
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberPrefix22[]
     */
    public function getPrefix()
    {
        return $this->prefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefix;
    }

    /**
     * Setter for prefix
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberPrefix22[] $prefix
     * @return $this
     */
    public function setPrefix(array $prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefix()
    {
        $this->prefix = null;
        return $this;
    }

    /**
     * Adder for prefix
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberPrefix22 $prefix
     * @return $this
     */
    public function addPrefix($prefix)
    {
        $this->prefix[] = $prefix;
        return $this;
    }
}

