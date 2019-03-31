<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNumberPortabilityQueryGetRequest
 *
 * Request to get the Service Provider Number Portability Query Digit Pattern Trigger List information.
 *         The response is either a ServiceProviderNumberPortabilityQueryGetResponse or an ErrorResponse.
 *
 * @see ServiceProviderNumberPortabilityQueryGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:4297","type":"sequence"}]
 */
class ServiceProviderNumberPortabilityQueryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4297
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName includeDigitPatterns
     * @Type bool
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4297
     * @var bool|null
     */
    private $includeDigitPatterns = null;

    /**
     * @ElementName searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     * @Array
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4297
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern[]
     */
    private $searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern = array(
        
    );

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:4297
     * @MinInclusive 1
     * @var int|null
     */
    private $responseSizeLimit = null;

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
     * Getter for includeDigitPatterns
     *
     * @return bool
     */
    public function getIncludeDigitPatterns()
    {
        return $this->includeDigitPatterns instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->includeDigitPatterns;
    }

    /**
     * Setter for includeDigitPatterns
     *
     * @param bool $includeDigitPatterns
     * @return $this
     */
    public function setIncludeDigitPatterns($includeDigitPatterns)
    {
        $this->includeDigitPatterns = $includeDigitPatterns;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncludeDigitPatterns()
    {
        $this->includeDigitPatterns = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern[]
     */
    public function getSearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern()
    {
        return $this->searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern;
    }

    /**
     * Setter for searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern[] $searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     * @return $this
     */
    public function setSearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern(array $searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern)
    {
        $this->searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern = $searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern()
    {
        $this->searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern $searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     * @return $this
     */
    public function addSearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern($searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern)
    {
        $this->searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern[] = $searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern;
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


}

