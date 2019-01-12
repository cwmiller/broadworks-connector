<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNumberPortabilityQueryAddListRequest
 *
 * Add a list of the Service Provider Number Portability Query Digit Patterns.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4254","type":"sequence"}]
 */
class ServiceProviderNumberPortabilityQueryAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4254
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName digitPattern
     * @Type string
     * @Array
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4254
     * @var string[]
     */
    private $digitPattern = array(
        
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
     * Getter for digitPattern
     *
     * @return string[]
     */
    public function getDigitPattern()
    {
        return $this->digitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPattern;
    }

    /**
     * Setter for digitPattern
     *
     * @param string[] $digitPattern
     * @return $this
     */
    public function setDigitPattern(array $digitPattern)
    {
        $this->digitPattern = $digitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitPattern()
    {
        $this->digitPattern = null;
        return $this;
    }

    /**
     * Adder for digitPattern
     *
     * @param string $digitPattern
     * @return $this
     */
    public function addDigitPattern(string $digitPattern)
    {
        $this->digitPattern[] = $digitPattern;
        return $this;
    }


}

