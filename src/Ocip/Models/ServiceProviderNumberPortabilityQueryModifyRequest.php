<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNumberPortabilityQueryModifyRequest
 *
 * Modify the Service Provider Number Portability Query information.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class ServiceProviderNumberPortabilityQueryModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName enableNumberPortabilityQueryForOutgoingCalls
     * @var bool|null
     */
    private $enableNumberPortabilityQueryForOutgoingCalls = null;

    /**
     * @ElementName enableNumberPortabilityQueryForIncomingCalls
     * @var bool|null
     */
    private $enableNumberPortabilityQueryForIncomingCalls = null;

    /**
     * @ElementName enableNumberPortabilityQueryForNetworkCallsOnly
     * @var bool|null
     */
    private $enableNumberPortabilityQueryForNetworkCallsOnly = null;

    /**
     * @ElementName deleteDigitPattern
     * @var string[]
     */
    private $deleteDigitPattern = array(
        
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
     * Getter for enableNumberPortabilityQueryForOutgoingCalls
     *
     * @ElementName enableNumberPortabilityQueryForOutgoingCalls
     * @return bool|null
     */
    public function getEnableNumberPortabilityQueryForOutgoingCalls()
    {
        return $this->enableNumberPortabilityQueryForOutgoingCalls;
    }

    /**
     * Setter for enableNumberPortabilityQueryForOutgoingCalls
     *
     * @ElementName enableNumberPortabilityQueryForOutgoingCalls
     * @param bool|null $enableNumberPortabilityQueryForOutgoingCalls
     * @return $this
     */
    public function setEnableNumberPortabilityQueryForOutgoingCalls($enableNumberPortabilityQueryForOutgoingCalls)
    {
        $this->enableNumberPortabilityQueryForOutgoingCalls = $enableNumberPortabilityQueryForOutgoingCalls;
        return $this;
    }

    /**
     * Getter for enableNumberPortabilityQueryForIncomingCalls
     *
     * @ElementName enableNumberPortabilityQueryForIncomingCalls
     * @return bool|null
     */
    public function getEnableNumberPortabilityQueryForIncomingCalls()
    {
        return $this->enableNumberPortabilityQueryForIncomingCalls;
    }

    /**
     * Setter for enableNumberPortabilityQueryForIncomingCalls
     *
     * @ElementName enableNumberPortabilityQueryForIncomingCalls
     * @param bool|null $enableNumberPortabilityQueryForIncomingCalls
     * @return $this
     */
    public function setEnableNumberPortabilityQueryForIncomingCalls($enableNumberPortabilityQueryForIncomingCalls)
    {
        $this->enableNumberPortabilityQueryForIncomingCalls = $enableNumberPortabilityQueryForIncomingCalls;
        return $this;
    }

    /**
     * Getter for enableNumberPortabilityQueryForNetworkCallsOnly
     *
     * @ElementName enableNumberPortabilityQueryForNetworkCallsOnly
     * @return bool|null
     */
    public function getEnableNumberPortabilityQueryForNetworkCallsOnly()
    {
        return $this->enableNumberPortabilityQueryForNetworkCallsOnly;
    }

    /**
     * Setter for enableNumberPortabilityQueryForNetworkCallsOnly
     *
     * @ElementName enableNumberPortabilityQueryForNetworkCallsOnly
     * @param bool|null $enableNumberPortabilityQueryForNetworkCallsOnly
     * @return $this
     */
    public function setEnableNumberPortabilityQueryForNetworkCallsOnly($enableNumberPortabilityQueryForNetworkCallsOnly)
    {
        $this->enableNumberPortabilityQueryForNetworkCallsOnly = $enableNumberPortabilityQueryForNetworkCallsOnly;
        return $this;
    }

    /**
     * Getter for deleteDigitPattern
     *
     * @ElementName deleteDigitPattern
     * @return string[]
     */
    public function getDeleteDigitPattern()
    {
        return $this->deleteDigitPattern;
    }

    /**
     * Setter for deleteDigitPattern
     *
     * @ElementName deleteDigitPattern
     * @param string[] $deleteDigitPattern
     * @return $this
     */
    public function setDeleteDigitPattern(array $deleteDigitPattern)
    {
        $this->deleteDigitPattern = $deleteDigitPattern;
        return $this;
    }

    /**
     * Adder for deleteDigitPattern
     *
     * @ElementName deleteDigitPattern
     * @param string $deleteDigitPattern
     * @return $this
     */
    public function addDeleteDigitPattern(string $deleteDigitPattern)
    {
        $this->deleteDigitPattern []= $deleteDigitPattern;
        return $this;
    }


}

