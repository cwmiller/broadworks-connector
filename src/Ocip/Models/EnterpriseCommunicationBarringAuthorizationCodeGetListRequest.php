<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCommunicationBarringAuthorizationCodeGetListRequest
 *
 * Get a list of Communication Barring Authorization Codes in an enterprise.
 *         The response is either
 * EnterpriseCommunicationBarringAuthorizationCodeGetListResponse or ErrorResponse.
 *
 * @see EnterpriseCommunicationBarringAuthorizationCodeGetListResponse
 * @see ErrorResponse
 */
class EnterpriseCommunicationBarringAuthorizationCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaCommunicationBarringAuthorizationCode
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCode[]
     */
    private $searchCriteriaCommunicationBarringAuthorizationCode = array(
        
    );

    /**
     * @ElementName searchCriteriaCommunicationBarringAuthorizationCodeDescription
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCodeDescription[]
     */
    private $searchCriteriaCommunicationBarringAuthorizationCodeDescription = array(
        
    );

    /**
     * @ElementName searchCriteriaNetworkClassOfServiceName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNetworkClassOfServiceName[]
     */
    private $searchCriteriaNetworkClassOfServiceName = array(
        
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
     * Getter for searchCriteriaCommunicationBarringAuthorizationCode
     *
     * @ElementName searchCriteriaCommunicationBarringAuthorizationCode
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCode[]
     */
    public function getSearchCriteriaCommunicationBarringAuthorizationCode()
    {
        return $this->searchCriteriaCommunicationBarringAuthorizationCode;
    }

    /**
     * Setter for searchCriteriaCommunicationBarringAuthorizationCode
     *
     * @ElementName searchCriteriaCommunicationBarringAuthorizationCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCode[] $searchCriteriaCommunicationBarringAuthorizationCode
     * @return $this
     */
    public function setSearchCriteriaCommunicationBarringAuthorizationCode(array $searchCriteriaCommunicationBarringAuthorizationCode)
    {
        $this->searchCriteriaCommunicationBarringAuthorizationCode = $searchCriteriaCommunicationBarringAuthorizationCode;
        return $this;
    }

    /**
     * Adder for searchCriteriaCommunicationBarringAuthorizationCode
     *
     * @ElementName searchCriteriaCommunicationBarringAuthorizationCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCode $searchCriteriaCommunicationBarringAuthorizationCode
     * @return $this
     */
    public function addSearchCriteriaCommunicationBarringAuthorizationCode($searchCriteriaCommunicationBarringAuthorizationCode)
    {
        $this->searchCriteriaCommunicationBarringAuthorizationCode []= $searchCriteriaCommunicationBarringAuthorizationCode;
        return $this;
    }

    /**
     * Getter for searchCriteriaCommunicationBarringAuthorizationCodeDescription
     *
     * @ElementName searchCriteriaCommunicationBarringAuthorizationCodeDescription
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCodeDescription[]
     */
    public function getSearchCriteriaCommunicationBarringAuthorizationCodeDescription()
    {
        return $this->searchCriteriaCommunicationBarringAuthorizationCodeDescription;
    }

    /**
     * Setter for searchCriteriaCommunicationBarringAuthorizationCodeDescription
     *
     * @ElementName searchCriteriaCommunicationBarringAuthorizationCodeDescription
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCodeDescription[] $searchCriteriaCommunicationBarringAuthorizationCodeDescription
     * @return $this
     */
    public function setSearchCriteriaCommunicationBarringAuthorizationCodeDescription(array $searchCriteriaCommunicationBarringAuthorizationCodeDescription)
    {
        $this->searchCriteriaCommunicationBarringAuthorizationCodeDescription = $searchCriteriaCommunicationBarringAuthorizationCodeDescription;
        return $this;
    }

    /**
     * Adder for searchCriteriaCommunicationBarringAuthorizationCodeDescription
     *
     * @ElementName searchCriteriaCommunicationBarringAuthorizationCodeDescription
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCodeDescription $searchCriteriaCommunicationBarringAuthorizationCodeDescription
     * @return $this
     */
    public function addSearchCriteriaCommunicationBarringAuthorizationCodeDescription($searchCriteriaCommunicationBarringAuthorizationCodeDescription)
    {
        $this->searchCriteriaCommunicationBarringAuthorizationCodeDescription []= $searchCriteriaCommunicationBarringAuthorizationCodeDescription;
        return $this;
    }

    /**
     * Getter for searchCriteriaNetworkClassOfServiceName
     *
     * @ElementName searchCriteriaNetworkClassOfServiceName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNetworkClassOfServiceName[]
     */
    public function getSearchCriteriaNetworkClassOfServiceName()
    {
        return $this->searchCriteriaNetworkClassOfServiceName;
    }

    /**
     * Setter for searchCriteriaNetworkClassOfServiceName
     *
     * @ElementName searchCriteriaNetworkClassOfServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNetworkClassOfServiceName[] $searchCriteriaNetworkClassOfServiceName
     * @return $this
     */
    public function setSearchCriteriaNetworkClassOfServiceName(array $searchCriteriaNetworkClassOfServiceName)
    {
        $this->searchCriteriaNetworkClassOfServiceName = $searchCriteriaNetworkClassOfServiceName;
        return $this;
    }

    /**
     * Adder for searchCriteriaNetworkClassOfServiceName
     *
     * @ElementName searchCriteriaNetworkClassOfServiceName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNetworkClassOfServiceName $searchCriteriaNetworkClassOfServiceName
     * @return $this
     */
    public function addSearchCriteriaNetworkClassOfServiceName($searchCriteriaNetworkClassOfServiceName)
    {
        $this->searchCriteriaNetworkClassOfServiceName []= $searchCriteriaNetworkClassOfServiceName;
        return $this;
    }


}

