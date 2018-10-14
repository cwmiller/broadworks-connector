<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest
 *
 * Get an existing Digit Pattern Criteria.
 *         The response is either a
 * ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse or
 * an ErrorResponse.
 *
 * @see
 * ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListResponse
 * @see ErrorResponse
 */
class ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaDigitPattern
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[]
     */
    private $searchCriteriaDigitPattern = array(
        
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
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
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

    /**
     * Getter for searchCriteriaDigitPattern
     *
     * @ElementName searchCriteriaDigitPattern
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[]
     */
    public function getSearchCriteriaDigitPattern()
    {
        return $this->searchCriteriaDigitPattern;
    }

    /**
     * Setter for searchCriteriaDigitPattern
     *
     * @ElementName searchCriteriaDigitPattern
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern[] $searchCriteriaDigitPattern
     * @return $this
     */
    public function setSearchCriteriaDigitPattern(array $searchCriteriaDigitPattern)
    {
        $this->searchCriteriaDigitPattern = $searchCriteriaDigitPattern;
        return $this;
    }

    /**
     * Adder for searchCriteriaDigitPattern
     *
     * @ElementName searchCriteriaDigitPattern
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDigitPattern $searchCriteriaDigitPattern
     * @return $this
     */
    public function addSearchCriteriaDigitPattern($searchCriteriaDigitPattern)
    {
        $this->searchCriteriaDigitPattern []= $searchCriteriaDigitPattern;
        return $this;
    }


}

