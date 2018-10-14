<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest
 *
 * Request the list of Virtual On-Net users in an Enterprise.
 *         It is possible to search by various criteria to restrict the number of
 * rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a 
 * EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse or 
 *         an ErrorResponse.
 *
 * @see EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse
 * @see ErrorResponse
 */
class EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName searchCriteriaUserLastName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    private $searchCriteriaUserLastName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserFirstName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    private $searchCriteriaUserFirstName = array(
        
    );

    /**
     * @ElementName searchCriteriaDn
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    private $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupLocationCode
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[]
     */
    private $searchCriteriaGroupLocationCode = array(
        
    );

    /**
     * @ElementName searchCriteriaExtension
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    private $searchCriteriaExtension = array(
        
    );

    /**
     * @ElementName searchCriteriaExactVirtualOnNetCallTypeName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactVirtualOnNetCallTypeName[]
     */
    private $searchCriteriaExactVirtualOnNetCallTypeName = array(
        
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
     * Getter for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName;
    }

    /**
     * Setter for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[] $searchCriteriaUserLastName
     * @return $this
     */
    public function setSearchCriteriaUserLastName(array $searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserLastName
     *
     * @ElementName searchCriteriaUserLastName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName $searchCriteriaUserLastName
     * @return $this
     */
    public function addSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName []= $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName;
    }

    /**
     * Setter for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[] $searchCriteriaUserFirstName
     * @return $this
     */
    public function setSearchCriteriaUserFirstName(array $searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName = $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserFirstName
     *
     * @ElementName searchCriteriaUserFirstName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     * @return $this
     */
    public function addSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName []= $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * Getter for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn;
    }

    /**
     * Setter for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[] $searchCriteriaDn
     * @return $this
     */
    public function setSearchCriteriaDn(array $searchCriteriaDn)
    {
        $this->searchCriteriaDn = $searchCriteriaDn;
        return $this;
    }

    /**
     * Adder for searchCriteriaDn
     *
     * @ElementName searchCriteriaDn
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn $searchCriteriaDn
     * @return $this
     */
    public function addSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn []= $searchCriteriaDn;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupLocationCode
     *
     * @ElementName searchCriteriaGroupLocationCode
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[]
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return $this->searchCriteriaGroupLocationCode;
    }

    /**
     * Setter for searchCriteriaGroupLocationCode
     *
     * @ElementName searchCriteriaGroupLocationCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[] $searchCriteriaGroupLocationCode
     * @return $this
     */
    public function setSearchCriteriaGroupLocationCode(array $searchCriteriaGroupLocationCode)
    {
        $this->searchCriteriaGroupLocationCode = $searchCriteriaGroupLocationCode;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupLocationCode
     *
     * @ElementName searchCriteriaGroupLocationCode
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode
     * @return $this
     */
    public function addSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode)
    {
        $this->searchCriteriaGroupLocationCode []= $searchCriteriaGroupLocationCode;
        return $this;
    }

    /**
     * Getter for searchCriteriaExtension
     *
     * @ElementName searchCriteriaExtension
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    public function getSearchCriteriaExtension()
    {
        return $this->searchCriteriaExtension;
    }

    /**
     * Setter for searchCriteriaExtension
     *
     * @ElementName searchCriteriaExtension
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[] $searchCriteriaExtension
     * @return $this
     */
    public function setSearchCriteriaExtension(array $searchCriteriaExtension)
    {
        $this->searchCriteriaExtension = $searchCriteriaExtension;
        return $this;
    }

    /**
     * Adder for searchCriteriaExtension
     *
     * @ElementName searchCriteriaExtension
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension $searchCriteriaExtension
     * @return $this
     */
    public function addSearchCriteriaExtension($searchCriteriaExtension)
    {
        $this->searchCriteriaExtension []= $searchCriteriaExtension;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactVirtualOnNetCallTypeName
     *
     * @ElementName searchCriteriaExactVirtualOnNetCallTypeName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactVirtualOnNetCallTypeName[]
     */
    public function getSearchCriteriaExactVirtualOnNetCallTypeName()
    {
        return $this->searchCriteriaExactVirtualOnNetCallTypeName;
    }

    /**
     * Setter for searchCriteriaExactVirtualOnNetCallTypeName
     *
     * @ElementName searchCriteriaExactVirtualOnNetCallTypeName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactVirtualOnNetCallTypeName[] $searchCriteriaExactVirtualOnNetCallTypeName
     * @return $this
     */
    public function setSearchCriteriaExactVirtualOnNetCallTypeName(array $searchCriteriaExactVirtualOnNetCallTypeName)
    {
        $this->searchCriteriaExactVirtualOnNetCallTypeName = $searchCriteriaExactVirtualOnNetCallTypeName;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactVirtualOnNetCallTypeName
     *
     * @ElementName searchCriteriaExactVirtualOnNetCallTypeName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactVirtualOnNetCallTypeName $searchCriteriaExactVirtualOnNetCallTypeName
     * @return $this
     */
    public function addSearchCriteriaExactVirtualOnNetCallTypeName($searchCriteriaExactVirtualOnNetCallTypeName)
    {
        $this->searchCriteriaExactVirtualOnNetCallTypeName []= $searchCriteriaExactVirtualOnNetCallTypeName;
        return $this;
    }


}

