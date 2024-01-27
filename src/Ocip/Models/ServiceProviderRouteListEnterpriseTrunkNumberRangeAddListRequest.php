<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeAddListRequest
 *
 * Add number ranges to a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:7214","type":"sequence"}]
 */
class ServiceProviderRouteListEnterpriseTrunkNumberRangeAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:7214
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName numberRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DNRange
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:7214
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    protected $numberRange = [
        
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
     * Getter for numberRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    public function getNumberRange()
    {
        return $this->numberRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberRange;
    }

    /**
     * Setter for numberRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange[] $numberRange
     * @return $this
     */
    public function setNumberRange(array $numberRange)
    {
        $this->numberRange = $numberRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberRange()
    {
        $this->numberRange = null;
        return $this;
    }

    /**
     * Adder for numberRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $numberRange
     * @return $this
     */
    public function addNumberRange($numberRange)
    {
        $this->numberRange[] = $numberRange;
        return $this;
    }
}

