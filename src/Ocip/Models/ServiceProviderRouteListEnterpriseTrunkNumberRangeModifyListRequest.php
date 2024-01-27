<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeModifyListRequest
 *
 * Modify a list of number ranges in a service provider
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:728","type":"sequence"}]
 */
class ServiceProviderRouteListEnterpriseTrunkNumberRangeModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 500f9871ed90b8ab3fbd262883ab503b:728
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName numberRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberRangeModify
     * @Array
     * @Optional
     * @Group 500f9871ed90b8ab3fbd262883ab503b:728
     * @var \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberRangeModify[]
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberRangeModify[]
     */
    public function getNumberRange()
    {
        return $this->numberRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberRange;
    }

    /**
     * Setter for numberRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberRangeModify[] $numberRange
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\EnterpriseTrunkNumberRangeModify $numberRange
     * @return $this
     */
    public function addNumberRange($numberRange)
    {
        $this->numberRange[] = $numberRange;
        return $this;
    }
}

