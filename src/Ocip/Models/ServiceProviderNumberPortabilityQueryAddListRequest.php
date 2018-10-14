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
 */
class ServiceProviderNumberPortabilityQueryAddListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName digitPattern
     * @var string[]
     */
    private $digitPattern = array(
        
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
     * Getter for digitPattern
     *
     * @ElementName digitPattern
     * @return string[]
     */
    public function getDigitPattern()
    {
        return $this->digitPattern;
    }

    /**
     * Setter for digitPattern
     *
     * @ElementName digitPattern
     * @param string[] $digitPattern
     * @return $this
     */
    public function setDigitPattern(array $digitPattern)
    {
        $this->digitPattern = $digitPattern;
        return $this;
    }

    /**
     * Adder for digitPattern
     *
     * @ElementName digitPattern
     * @param string $digitPattern
     * @return $this
     */
    public function addDigitPattern(string $digitPattern)
    {
        $this->digitPattern []= $digitPattern;
        return $this;
    }


}

