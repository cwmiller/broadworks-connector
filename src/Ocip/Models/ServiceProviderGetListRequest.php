<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetListRequest
 *
 * Request a list of service providers and/or enterprises in the system.
 *         It is possible to search by various criteria to restrict the number of
 * rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         If reseller administrator sends the request, searchCriteriaResellerId is
 * ignored. Service providers/enterprise 
 *         within the administrator's reseller meeting the search criteria are
 * returned.        
 *         The response is either a ServiceProviderGetListResponse or an
 * ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode:
 *           searchCriteriaResellerId
 *
 * @see ServiceProviderGetListResponse
 * @see ErrorResponse
 */
class ServiceProviderGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isEnterprise
     * @Type bool
     * @var bool|null
     */
    private $isEnterprise = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaServiceProviderId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    private $searchCriteriaServiceProviderId = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceProviderName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderName
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderName[]
     */
    private $searchCriteriaServiceProviderName = array(
        
    );

    /**
     * @ElementName searchCriteriaResellerId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    private $searchCriteriaResellerId = array(
        
    );

    /**
     * Getter for isEnterprise
     *
     * @return bool
     */
    public function getIsEnterprise()
    {
        return $this->isEnterprise instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isEnterprise;
    }

    /**
     * Setter for isEnterprise
     *
     * @param bool $isEnterprise
     * @return $this
     */
    public function setIsEnterprise($isEnterprise)
    {
        $this->isEnterprise = $isEnterprise;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsEnterprise()
    {
        $this->isEnterprise = null;
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
     * Getter for searchCriteriaServiceProviderId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return $this->searchCriteriaServiceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceProviderId;
    }

    /**
     * Setter for searchCriteriaServiceProviderId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[] $searchCriteriaServiceProviderId
     * @return $this
     */
    public function setSearchCriteriaServiceProviderId(array $searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceProviderId()
    {
        $this->searchCriteriaServiceProviderId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId
     * @return $this
     */
    public function addSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId[] = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceProviderName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderName[]
     */
    public function getSearchCriteriaServiceProviderName()
    {
        return $this->searchCriteriaServiceProviderName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceProviderName;
    }

    /**
     * Setter for searchCriteriaServiceProviderName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderName[] $searchCriteriaServiceProviderName
     * @return $this
     */
    public function setSearchCriteriaServiceProviderName(array $searchCriteriaServiceProviderName)
    {
        $this->searchCriteriaServiceProviderName = $searchCriteriaServiceProviderName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceProviderName()
    {
        $this->searchCriteriaServiceProviderName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderName $searchCriteriaServiceProviderName
     * @return $this
     */
    public function addSearchCriteriaServiceProviderName($searchCriteriaServiceProviderName)
    {
        $this->searchCriteriaServiceProviderName[] = $searchCriteriaServiceProviderName;
        return $this;
    }

    /**
     * Getter for searchCriteriaResellerId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[]
     */
    public function getSearchCriteriaResellerId()
    {
        return $this->searchCriteriaResellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaResellerId;
    }

    /**
     * Setter for searchCriteriaResellerId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId[] $searchCriteriaResellerId
     * @return $this
     */
    public function setSearchCriteriaResellerId(array $searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId = $searchCriteriaResellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaResellerId()
    {
        $this->searchCriteriaResellerId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaResellerId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaResellerId $searchCriteriaResellerId
     * @return $this
     */
    public function addSearchCriteriaResellerId($searchCriteriaResellerId)
    {
        $this->searchCriteriaResellerId[] = $searchCriteriaResellerId;
        return $this;
    }


}

