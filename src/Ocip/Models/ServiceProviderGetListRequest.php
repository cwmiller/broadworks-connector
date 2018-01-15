<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderGetListRequest
 *
 * Request a list of service providers and/or enterprises in the system.
 *         It is possible to search by various criteria to restrict the number of
 * rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a ServiceProviderGetListResponse or an
 * ErrorResponse.
 */
class ServiceProviderGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName isEnterprise
     * @var bool|null
     */
    private $isEnterprise = null;

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaServiceProviderId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    private $searchCriteriaServiceProviderId = array(
        
    );

    /**
     * @ElementName searchCriteriaServiceProviderName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderName[]
     */
    private $searchCriteriaServiceProviderName = array(
        
    );

    /**
     * Getter for isEnterprise
     *
     * @ElementName isEnterprise
     * @return bool|null
     */
    public function getIsEnterprise()
    {
        return $this->isEnterprise;
    }

    /**
     * Setter for isEnterprise
     *
     * @ElementName isEnterprise
     * @param bool|null $isEnterprise
     * @return $this
     */
    public function setIsEnterprise($isEnterprise)
    {
        $this->isEnterprise = $isEnterprise;
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
     * Getter for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return $this->searchCriteriaServiceProviderId;
    }

    /**
     * Setter for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[] $searchCriteriaServiceProviderId
     * @return $this
     */
    public function setSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderId
     *
     * @ElementName searchCriteriaServiceProviderId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId
     * @return $this
     */
    public function addSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId []= $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceProviderName
     *
     * @ElementName searchCriteriaServiceProviderName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderName[]
     */
    public function getSearchCriteriaServiceProviderName()
    {
        return $this->searchCriteriaServiceProviderName;
    }

    /**
     * Setter for searchCriteriaServiceProviderName
     *
     * @ElementName searchCriteriaServiceProviderName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderName[] $searchCriteriaServiceProviderName
     * @return $this
     */
    public function setSearchCriteriaServiceProviderName($searchCriteriaServiceProviderName)
    {
        $this->searchCriteriaServiceProviderName = $searchCriteriaServiceProviderName;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderName
     *
     * @ElementName searchCriteriaServiceProviderName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderName $searchCriteriaServiceProviderName
     * @return $this
     */
    public function addSearchCriteriaServiceProviderName($searchCriteriaServiceProviderName)
    {
        $this->searchCriteriaServiceProviderName []= $searchCriteriaServiceProviderName;
        return $this;
    }


}

