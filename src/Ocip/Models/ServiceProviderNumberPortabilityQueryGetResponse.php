<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNumberPortabilityQueryGetResponse
 *
 * Response to the ServiceProviderNumberPortabilityQueryGetRequest.
 *         The response contains the service provider number portability query information.
 *
 * @see ServiceProviderNumberPortabilityQueryGetRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:5201","type":"sequence"}]
 */
class ServiceProviderNumberPortabilityQueryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName enableNumberPortabilityQueryForOutgoingCalls
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:5201
     * @var bool|null
     */
    protected $enableNumberPortabilityQueryForOutgoingCalls = null;

    /**
     * @ElementName enableNumberPortabilityQueryForIncomingCalls
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:5201
     * @var bool|null
     */
    protected $enableNumberPortabilityQueryForIncomingCalls = null;

    /**
     * @ElementName enableNumberPortabilityQueryForNetworkCallsOnly
     * @Type bool
     * @Group e19a9072c2dad499e9f28837da5768db:5201
     * @var bool|null
     */
    protected $enableNumberPortabilityQueryForNetworkCallsOnly = null;

    /**
     * @ElementName digitPattern
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:5201
     * @MinLength 1
     * @MaxLength 160
     * @var string[]
     */
    protected $digitPattern = [
        
    ];

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

