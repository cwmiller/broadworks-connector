<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCommunicationBarringAuthorizationCodeGetListRequest
 *
 * Get a list of Communication Barring Authorization Codes in an enterprise.
 *         The response is either EnterpriseCommunicationBarringAuthorizationCodeGetListResponse or ErrorResponse.
 *
 * @see EnterpriseCommunicationBarringAuthorizationCodeGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"5395c7df0157d44aa22f3351d1a5f3da:544","type":"sequence"}]
 */
class EnterpriseCommunicationBarringAuthorizationCodeGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:544
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:544
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaCommunicationBarringAuthorizationCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCode
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:544
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCode[]
     */
    private $searchCriteriaCommunicationBarringAuthorizationCode = array(
        
    );

    /**
     * @ElementName searchCriteriaCommunicationBarringAuthorizationCodeDescription
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCodeDescription
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:544
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCodeDescription[]
     */
    private $searchCriteriaCommunicationBarringAuthorizationCodeDescription = array(
        
    );

    /**
     * @ElementName searchCriteriaNetworkClassOfServiceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNetworkClassOfServiceName
     * @Array
     * @Optional
     * @Group 5395c7df0157d44aa22f3351d1a5f3da:544
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNetworkClassOfServiceName[]
     */
    private $searchCriteriaNetworkClassOfServiceName = array(
        
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
     * Getter for searchCriteriaCommunicationBarringAuthorizationCode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCode[]
     */
    public function getSearchCriteriaCommunicationBarringAuthorizationCode()
    {
        return $this->searchCriteriaCommunicationBarringAuthorizationCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaCommunicationBarringAuthorizationCode;
    }

    /**
     * Setter for searchCriteriaCommunicationBarringAuthorizationCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCode[] $searchCriteriaCommunicationBarringAuthorizationCode
     * @return $this
     */
    public function setSearchCriteriaCommunicationBarringAuthorizationCode(array $searchCriteriaCommunicationBarringAuthorizationCode)
    {
        $this->searchCriteriaCommunicationBarringAuthorizationCode = $searchCriteriaCommunicationBarringAuthorizationCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaCommunicationBarringAuthorizationCode()
    {
        $this->searchCriteriaCommunicationBarringAuthorizationCode = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaCommunicationBarringAuthorizationCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCode $searchCriteriaCommunicationBarringAuthorizationCode
     * @return $this
     */
    public function addSearchCriteriaCommunicationBarringAuthorizationCode($searchCriteriaCommunicationBarringAuthorizationCode)
    {
        $this->searchCriteriaCommunicationBarringAuthorizationCode[] = $searchCriteriaCommunicationBarringAuthorizationCode;
        return $this;
    }

    /**
     * Getter for searchCriteriaCommunicationBarringAuthorizationCodeDescription
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCodeDescription[]
     */
    public function getSearchCriteriaCommunicationBarringAuthorizationCodeDescription()
    {
        return $this->searchCriteriaCommunicationBarringAuthorizationCodeDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaCommunicationBarringAuthorizationCodeDescription;
    }

    /**
     * Setter for searchCriteriaCommunicationBarringAuthorizationCodeDescription
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCodeDescription[] $searchCriteriaCommunicationBarringAuthorizationCodeDescription
     * @return $this
     */
    public function setSearchCriteriaCommunicationBarringAuthorizationCodeDescription(array $searchCriteriaCommunicationBarringAuthorizationCodeDescription)
    {
        $this->searchCriteriaCommunicationBarringAuthorizationCodeDescription = $searchCriteriaCommunicationBarringAuthorizationCodeDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaCommunicationBarringAuthorizationCodeDescription()
    {
        $this->searchCriteriaCommunicationBarringAuthorizationCodeDescription = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaCommunicationBarringAuthorizationCodeDescription
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCommunicationBarringAuthorizationCodeDescription $searchCriteriaCommunicationBarringAuthorizationCodeDescription
     * @return $this
     */
    public function addSearchCriteriaCommunicationBarringAuthorizationCodeDescription($searchCriteriaCommunicationBarringAuthorizationCodeDescription)
    {
        $this->searchCriteriaCommunicationBarringAuthorizationCodeDescription[] = $searchCriteriaCommunicationBarringAuthorizationCodeDescription;
        return $this;
    }

    /**
     * Getter for searchCriteriaNetworkClassOfServiceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNetworkClassOfServiceName[]
     */
    public function getSearchCriteriaNetworkClassOfServiceName()
    {
        return $this->searchCriteriaNetworkClassOfServiceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaNetworkClassOfServiceName;
    }

    /**
     * Setter for searchCriteriaNetworkClassOfServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNetworkClassOfServiceName[] $searchCriteriaNetworkClassOfServiceName
     * @return $this
     */
    public function setSearchCriteriaNetworkClassOfServiceName(array $searchCriteriaNetworkClassOfServiceName)
    {
        $this->searchCriteriaNetworkClassOfServiceName = $searchCriteriaNetworkClassOfServiceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaNetworkClassOfServiceName()
    {
        $this->searchCriteriaNetworkClassOfServiceName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaNetworkClassOfServiceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaNetworkClassOfServiceName $searchCriteriaNetworkClassOfServiceName
     * @return $this
     */
    public function addSearchCriteriaNetworkClassOfServiceName($searchCriteriaNetworkClassOfServiceName)
    {
        $this->searchCriteriaNetworkClassOfServiceName[] = $searchCriteriaNetworkClassOfServiceName;
        return $this;
    }


}

