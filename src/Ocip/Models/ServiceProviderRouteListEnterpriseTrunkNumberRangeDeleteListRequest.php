<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeDeleteListRequest
 *
 * Delete number ranges from a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderRouteListEnterpriseTrunkNumberRangeDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName numberRangeStart
     * @Type string
     * @Array
     * @var string[]
     */
    private $numberRangeStart = array(
        
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
     * Getter for numberRangeStart
     *
     * @return string[]
     */
    public function getNumberRangeStart()
    {
        return $this->numberRangeStart instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberRangeStart;
    }

    /**
     * Setter for numberRangeStart
     *
     * @param string[] $numberRangeStart
     * @return $this
     */
    public function setNumberRangeStart(array $numberRangeStart)
    {
        $this->numberRangeStart = $numberRangeStart;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberRangeStart()
    {
        $this->numberRangeStart = null;
        return $this;
    }

    /**
     * Adder for numberRangeStart
     *
     * @param string $numberRangeStart
     * @return $this
     */
    public function addNumberRangeStart(string $numberRangeStart)
    {
        $this->numberRangeStart[] = $numberRangeStart;
        return $this;
    }


}

