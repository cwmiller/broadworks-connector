<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeActivateListRequest
 *
 * Activate number ranges in a service provider.
 *         It is not an error to activate an already activated number range. 
 *         The command fails if executed when system level enterprise trunk number
 * range activation is disabled.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderRouteListEnterpriseTrunkNumberRangeActivateListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName numberRangeStart
     * @var string[]
     */
    private $numberRangeStart = array(
        
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
     * Getter for numberRangeStart
     *
     * @ElementName numberRangeStart
     * @return string[]
     */
    public function getNumberRangeStart()
    {
        return $this->numberRangeStart;
    }

    /**
     * Setter for numberRangeStart
     *
     * @ElementName numberRangeStart
     * @param string[] $numberRangeStart
     * @return $this
     */
    public function setNumberRangeStart(array $numberRangeStart)
    {
        $this->numberRangeStart = $numberRangeStart;
        return $this;
    }

    /**
     * Adder for numberRangeStart
     *
     * @ElementName numberRangeStart
     * @param string $numberRangeStart
     * @return $this
     */
    public function addNumberRangeStart(string $numberRangeStart)
    {
        $this->numberRangeStart []= $numberRangeStart;
        return $this;
    }


}

