<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNumberPortabilityQueryGetResponse
 *
 * Response to the ServiceProviderNumberPortabilityQueryGetRequest.
 *         The response contains the service provider number portability query
 * information.
 */
class ServiceProviderNumberPortabilityQueryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

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
     * @ElementName digitPattern
     * @var string[]
     */
    private $digitPattern = array(
        
    );

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
    public function setDigitPattern($digitPattern)
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
    public function addDigitPattern($digitPattern)
    {
        $this->digitPattern []= $digitPattern;
        return $this;
    }


}

