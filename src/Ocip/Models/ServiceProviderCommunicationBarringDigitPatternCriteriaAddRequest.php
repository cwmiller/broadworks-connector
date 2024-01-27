<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringDigitPatternCriteriaAddRequest
 *
 * Add a new Communication Barring Digit Pattern Criteria.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:2120","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:2120
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group e19a9072c2dad499e9f28837da5768db:2120
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2120
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

    /**
     * @ElementName matchDigitPattern
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:2120
     * @MinLength 1
     * @MaxLength 160
     * @var string[]
     */
    protected $matchDigitPattern = [
        
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
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for matchDigitPattern
     *
     * @return string[]
     */
    public function getMatchDigitPattern()
    {
        return $this->matchDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->matchDigitPattern;
    }

    /**
     * Setter for matchDigitPattern
     *
     * @param string[] $matchDigitPattern
     * @return $this
     */
    public function setMatchDigitPattern(array $matchDigitPattern)
    {
        $this->matchDigitPattern = $matchDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMatchDigitPattern()
    {
        $this->matchDigitPattern = null;
        return $this;
    }

    /**
     * Adder for matchDigitPattern
     *
     * @param string $matchDigitPattern
     * @return $this
     */
    public function addMatchDigitPattern(string $matchDigitPattern)
    {
        $this->matchDigitPattern[] = $matchDigitPattern;
        return $this;
    }
}

