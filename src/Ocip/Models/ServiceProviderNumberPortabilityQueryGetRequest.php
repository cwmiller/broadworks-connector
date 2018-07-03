<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderNumberPortabilityQueryGetRequest
 *
 * Request to get the Service Provider Number Portability Query Digit Pattern
 * Trigger List information.
 *         The response is either a
 * ServiceProviderNumberPortabilityQueryGetResponse or an ErrorResponse.
 *
 * @see ServiceProviderNumberPortabilityQueryGetResponse
 * @see ErrorResponse
 */
class ServiceProviderNumberPortabilityQueryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName includeDigitPatterns
     * @var bool|null
     */
    private $includeDigitPatterns = null;

    /**
     * @ElementName searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern[]
     */
    private $searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern = array(
        
    );

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

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
     * Getter for includeDigitPatterns
     *
     * @ElementName includeDigitPatterns
     * @return bool|null
     */
    public function getIncludeDigitPatterns()
    {
        return $this->includeDigitPatterns;
    }

    /**
     * Setter for includeDigitPatterns
     *
     * @ElementName includeDigitPatterns
     * @param bool|null $includeDigitPatterns
     * @return $this
     */
    public function setIncludeDigitPatterns($includeDigitPatterns)
    {
        $this->includeDigitPatterns = $includeDigitPatterns;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     *
     * @ElementName searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern[]
     */
    public function getSearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern()
    {
        return $this->searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern;
    }

    /**
     * Setter for searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     *
     * @ElementName searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern[] $searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     * @return $this
     */
    public function setSearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern($searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern)
    {
        $this->searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern = $searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     *
     * @ElementName searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern $searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern
     * @return $this
     */
    public function addSearchCriteriaServiceProviderNumberPortabilityQueryDigitPattern($searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern)
    {
        $this->searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern []= $searchCriteriaServiceProviderNumberPortabilityQueryDigitPattern;
        return $this;
    }

    /**
     * Getter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @return int|null
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @param int|null $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }


}

