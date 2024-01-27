<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest
 *
 * Request the list of Virtual On-Net users in an Enterprise.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a  EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse or 
 *         an ErrorResponse.
 *
 * @see EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListResponse
 * @see ErrorResponse
 * @Groups [{"id":"ef8bc875d664cdc920228d455073e594:55","type":"sequence"}]
 */
class EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ef8bc875d664cdc920228d455073e594:55
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group ef8bc875d664cdc920228d455073e594:55
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName
     * @Array
     * @Optional
     * @Group ef8bc875d664cdc920228d455073e594:55
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    protected $searchCriteriaUserLastName = [
        
    ];

    /**
     * @ElementName searchCriteriaUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName
     * @Array
     * @Optional
     * @Group ef8bc875d664cdc920228d455073e594:55
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    protected $searchCriteriaUserFirstName = [
        
    ];

    /**
     * @ElementName searchCriteriaDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn
     * @Array
     * @Optional
     * @Group ef8bc875d664cdc920228d455073e594:55
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    protected $searchCriteriaDn = [
        
    ];

    /**
     * @ElementName searchCriteriaGroupLocationCode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode
     * @Array
     * @Optional
     * @Group ef8bc875d664cdc920228d455073e594:55
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[]
     */
    protected $searchCriteriaGroupLocationCode = [
        
    ];

    /**
     * @ElementName searchCriteriaExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension
     * @Array
     * @Optional
     * @Group ef8bc875d664cdc920228d455073e594:55
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    protected $searchCriteriaExtension = [
        
    ];

    /**
     * @ElementName searchCriteriaExactVirtualOnNetCallTypeName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactVirtualOnNetCallTypeName
     * @Array
     * @Optional
     * @Group ef8bc875d664cdc920228d455073e594:55
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactVirtualOnNetCallTypeName[]
     */
    protected $searchCriteriaExactVirtualOnNetCallTypeName = [
        
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
     * Getter for searchCriteriaUserLastName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserLastName;
    }

    /**
     * Setter for searchCriteriaUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[] $searchCriteriaUserLastName
     * @return $this
     */
    public function setSearchCriteriaUserLastName(array $searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserLastName()
    {
        $this->searchCriteriaUserLastName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName $searchCriteriaUserLastName
     * @return $this
     */
    public function addSearchCriteriaUserLastName($searchCriteriaUserLastName)
    {
        $this->searchCriteriaUserLastName[] = $searchCriteriaUserLastName;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserFirstName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserFirstName;
    }

    /**
     * Setter for searchCriteriaUserFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[] $searchCriteriaUserFirstName
     * @return $this
     */
    public function setSearchCriteriaUserFirstName(array $searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName = $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserFirstName()
    {
        $this->searchCriteriaUserFirstName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     * @return $this
     */
    public function addSearchCriteriaUserFirstName($searchCriteriaUserFirstName)
    {
        $this->searchCriteriaUserFirstName[] = $searchCriteriaUserFirstName;
        return $this;
    }

    /**
     * Getter for searchCriteriaDn
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDn;
    }

    /**
     * Setter for searchCriteriaDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[] $searchCriteriaDn
     * @return $this
     */
    public function setSearchCriteriaDn(array $searchCriteriaDn)
    {
        $this->searchCriteriaDn = $searchCriteriaDn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDn()
    {
        $this->searchCriteriaDn = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDn
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn $searchCriteriaDn
     * @return $this
     */
    public function addSearchCriteriaDn($searchCriteriaDn)
    {
        $this->searchCriteriaDn[] = $searchCriteriaDn;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupLocationCode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[]
     */
    public function getSearchCriteriaGroupLocationCode()
    {
        return $this->searchCriteriaGroupLocationCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupLocationCode;
    }

    /**
     * Setter for searchCriteriaGroupLocationCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode[] $searchCriteriaGroupLocationCode
     * @return $this
     */
    public function setSearchCriteriaGroupLocationCode(array $searchCriteriaGroupLocationCode)
    {
        $this->searchCriteriaGroupLocationCode = $searchCriteriaGroupLocationCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupLocationCode()
    {
        $this->searchCriteriaGroupLocationCode = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupLocationCode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupLocationCode $searchCriteriaGroupLocationCode
     * @return $this
     */
    public function addSearchCriteriaGroupLocationCode($searchCriteriaGroupLocationCode)
    {
        $this->searchCriteriaGroupLocationCode[] = $searchCriteriaGroupLocationCode;
        return $this;
    }

    /**
     * Getter for searchCriteriaExtension
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    public function getSearchCriteriaExtension()
    {
        return $this->searchCriteriaExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExtension;
    }

    /**
     * Setter for searchCriteriaExtension
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[] $searchCriteriaExtension
     * @return $this
     */
    public function setSearchCriteriaExtension(array $searchCriteriaExtension)
    {
        $this->searchCriteriaExtension = $searchCriteriaExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExtension()
    {
        $this->searchCriteriaExtension = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExtension
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension $searchCriteriaExtension
     * @return $this
     */
    public function addSearchCriteriaExtension($searchCriteriaExtension)
    {
        $this->searchCriteriaExtension[] = $searchCriteriaExtension;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactVirtualOnNetCallTypeName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactVirtualOnNetCallTypeName[]
     */
    public function getSearchCriteriaExactVirtualOnNetCallTypeName()
    {
        return $this->searchCriteriaExactVirtualOnNetCallTypeName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactVirtualOnNetCallTypeName;
    }

    /**
     * Setter for searchCriteriaExactVirtualOnNetCallTypeName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactVirtualOnNetCallTypeName[] $searchCriteriaExactVirtualOnNetCallTypeName
     * @return $this
     */
    public function setSearchCriteriaExactVirtualOnNetCallTypeName(array $searchCriteriaExactVirtualOnNetCallTypeName)
    {
        $this->searchCriteriaExactVirtualOnNetCallTypeName = $searchCriteriaExactVirtualOnNetCallTypeName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactVirtualOnNetCallTypeName()
    {
        $this->searchCriteriaExactVirtualOnNetCallTypeName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaExactVirtualOnNetCallTypeName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactVirtualOnNetCallTypeName $searchCriteriaExactVirtualOnNetCallTypeName
     * @return $this
     */
    public function addSearchCriteriaExactVirtualOnNetCallTypeName($searchCriteriaExactVirtualOnNetCallTypeName)
    {
        $this->searchCriteriaExactVirtualOnNetCallTypeName[] = $searchCriteriaExactVirtualOnNetCallTypeName;
        return $this;
    }
}

