<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixModifyListRequest
 *
 * Modify a list of number prefixes in a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:575","type":"sequence"}]
 */
class ServiceProviderRouteListEnterpriseTrunkNumberPrefixModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 500f9871ed90b8ab3fbd262883ab503b:575
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName numberPrefix
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberPrefixModify
     * @Array
     * @Optional
     * @Group 500f9871ed90b8ab3fbd262883ab503b:575
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberPrefixModify[]
     */
    protected $numberPrefix = [
        
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
     * Getter for numberPrefix
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberPrefixModify[]
     */
    public function getNumberPrefix()
    {
        return $this->numberPrefix instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberPrefix;
    }

    /**
     * Setter for numberPrefix
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberPrefixModify[] $numberPrefix
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberPrefixModify $numberPrefix
     * @return $this
     */
    public function addNumberPrefix($numberPrefix)
    {
        $this->numberPrefix[] = $numberPrefix;
        return $this;
    }
}

