<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest
 *
 * Get an existing Digit Pattern Criteria.
 *         The response is either a ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse or an ErrorResponse.
 *
 * @see ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:2109","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2109
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName name
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2109
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2109
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDigitPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:2109
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[]
     */
    protected $searchCriteriaDigitPattern = array(
        
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
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaDigitPattern
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[]
     */
    public function getSearchCriteriaDigitPattern()
    {
        return $this->searchCriteriaDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDigitPattern;
    }

    /**
     * Setter for searchCriteriaDigitPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[] $searchCriteriaDigitPattern
     * @return $this
     */
    public function setSearchCriteriaDigitPattern(array $searchCriteriaDigitPattern)
    {
        $this->searchCriteriaDigitPattern = $searchCriteriaDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDigitPattern()
    {
        $this->searchCriteriaDigitPattern = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDigitPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern $searchCriteriaDigitPattern
     * @return $this
     */
    public function addSearchCriteriaDigitPattern($searchCriteriaDigitPattern)
    {
        $this->searchCriteriaDigitPattern[] = $searchCriteriaDigitPattern;
        return $this;
    }


}

