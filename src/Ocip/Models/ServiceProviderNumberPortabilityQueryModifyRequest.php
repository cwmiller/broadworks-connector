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
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5220","type":"sequence"}]
 */
class ServiceProviderNumberPortabilityQueryModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:5220
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName enableNumberPortabilityQueryForOutgoingCalls
     * @Type bool
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5220
     * @var bool|null
     */
    protected $enableNumberPortabilityQueryForOutgoingCalls = null;

    /**
     * @ElementName enableNumberPortabilityQueryForIncomingCalls
     * @Type bool
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5220
     * @var bool|null
     */
    protected $enableNumberPortabilityQueryForIncomingCalls = null;

    /**
     * @ElementName enableNumberPortabilityQueryForNetworkCallsOnly
     * @Type bool
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5220
     * @var bool|null
     */
    protected $enableNumberPortabilityQueryForNetworkCallsOnly = null;

    /**
     * @ElementName deleteDigitPattern
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5220
     * @MinLength 1
     * @MaxLength 160
     * @var string[]
     */
    protected $deleteDigitPattern = [
        
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
     * Getter for enableNumberPortabilityQueryForOutgoingCalls
     *
     * @return bool
     */
    public function getEnableNumberPortabilityQueryForOutgoingCalls()
    {
        return $this->enableNumberPortabilityQueryForOutgoingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableNumberPortabilityQueryForOutgoingCalls;
    }

    /**
     * Setter for enableNumberPortabilityQueryForOutgoingCalls
     *
     * @param bool $enableNumberPortabilityQueryForOutgoingCalls
     * @return $this
     */
    public function setEnableNumberPortabilityQueryForOutgoingCalls($enableNumberPortabilityQueryForOutgoingCalls)
    {
        $this->enableNumberPortabilityQueryForOutgoingCalls = $enableNumberPortabilityQueryForOutgoingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableNumberPortabilityQueryForOutgoingCalls()
    {
        $this->enableNumberPortabilityQueryForOutgoingCalls = null;
        return $this;
    }

    /**
     * Getter for enableNumberPortabilityQueryForIncomingCalls
     *
     * @return bool
     */
    public function getEnableNumberPortabilityQueryForIncomingCalls()
    {
        return $this->enableNumberPortabilityQueryForIncomingCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableNumberPortabilityQueryForIncomingCalls;
    }

    /**
     * Setter for enableNumberPortabilityQueryForIncomingCalls
     *
     * @param bool $enableNumberPortabilityQueryForIncomingCalls
     * @return $this
     */
    public function setEnableNumberPortabilityQueryForIncomingCalls($enableNumberPortabilityQueryForIncomingCalls)
    {
        $this->enableNumberPortabilityQueryForIncomingCalls = $enableNumberPortabilityQueryForIncomingCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableNumberPortabilityQueryForIncomingCalls()
    {
        $this->enableNumberPortabilityQueryForIncomingCalls = null;
        return $this;
    }

    /**
     * Getter for enableNumberPortabilityQueryForNetworkCallsOnly
     *
     * @return bool
     */
    public function getEnableNumberPortabilityQueryForNetworkCallsOnly()
    {
        return $this->enableNumberPortabilityQueryForNetworkCallsOnly instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableNumberPortabilityQueryForNetworkCallsOnly;
    }

    /**
     * Setter for enableNumberPortabilityQueryForNetworkCallsOnly
     *
     * @param bool $enableNumberPortabilityQueryForNetworkCallsOnly
     * @return $this
     */
    public function setEnableNumberPortabilityQueryForNetworkCallsOnly($enableNumberPortabilityQueryForNetworkCallsOnly)
    {
        $this->enableNumberPortabilityQueryForNetworkCallsOnly = $enableNumberPortabilityQueryForNetworkCallsOnly;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableNumberPortabilityQueryForNetworkCallsOnly()
    {
        $this->enableNumberPortabilityQueryForNetworkCallsOnly = null;
        return $this;
    }

    /**
     * Getter for deleteDigitPattern
     *
     * @return string[]
     */
    public function getDeleteDigitPattern()
    {
        return $this->deleteDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->deleteDigitPattern;
    }

    /**
     * Setter for deleteDigitPattern
     *
     * @param string[] $deleteDigitPattern
     * @return $this
     */
    public function setDeleteDigitPattern(array $deleteDigitPattern)
    {
        $this->deleteDigitPattern = $deleteDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDeleteDigitPattern()
    {
        $this->deleteDigitPattern = null;
        return $this;
    }

    /**
     * Adder for deleteDigitPattern
     *
     * @param string $deleteDigitPattern
     * @return $this
     */
    public function addDeleteDigitPattern(string $deleteDigitPattern)
    {
        $this->deleteDigitPattern[] = $deleteDigitPattern;
        return $this;
    }
}

