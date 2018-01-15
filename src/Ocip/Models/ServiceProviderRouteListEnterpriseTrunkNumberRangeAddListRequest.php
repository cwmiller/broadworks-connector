<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeAddListRequest
 *
 * Add number ranges to a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderRouteListEnterpriseTrunkNumberRangeAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName numberRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    private $numberRange = array(
        
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
     * Getter for numberRange
     *
     * @ElementName numberRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\DNRange[]
     */
    public function getNumberRange()
    {
        return $this->numberRange;
    }

    /**
     * Setter for numberRange
     *
     * @ElementName numberRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange[] $numberRange
     * @return $this
     */
    public function setNumberRange($numberRange)
    {
        $this->numberRange = $numberRange;
        return $this;
    }

    /**
     * Adder for numberRange
     *
     * @ElementName numberRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\DNRange $numberRange
     * @return $this
     */
    public function addNumberRange($numberRange)
    {
        $this->numberRange []= $numberRange;
        return $this;
    }


}

