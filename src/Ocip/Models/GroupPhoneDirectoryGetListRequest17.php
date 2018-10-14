<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupPhoneDirectoryGetListRequest17
 *
 * Request a table containing the phone directory for a group.
 *         If the specified group is part of an enterprise, the directory 
 *         includes all users in the enterprise and all entries in the enterprise 
 *         common phone list and the common phone list of the specified group.
 *         If the specified group is part of a service provider, the directory 
 *         includes all users in the group and all entries in the common phone 
 *         list of the specified group.
 *         It is possible to search by various criteria to restrict the number of 
 *         rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either GroupPhoneDirectoryGetListResponse17 or 
 *         ErrorResponse.
 *         
 *         Replaced by: GroupPhoneDirectoryGetListRequest18
 *
 * @see GroupPhoneDirectoryGetListResponse17
 * @see ErrorResponse
 * @see GroupPhoneDirectoryGetListRequest18
 */
class GroupPhoneDirectoryGetListRequest17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName isExtendedInfoRequested
     * @var bool|null
     */
    private $isExtendedInfoRequested = null;

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
     * @ElementName searchCriteriaMobilePhoneNumber
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobilePhoneNumber[]
     */
    private $searchCriteriaMobilePhoneNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaEmailAddress
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress[]
     */
    private $searchCriteriaEmailAddress = array(
        
    );

    /**
     * @ElementName searchCriteriaYahooId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaYahooId[]
     */
    private $searchCriteriaYahooId = array(
        
    );

    /**
     * @ElementName searchCriteriaExactUserGroup
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup|null
     */
    private $searchCriteriaExactUserGroup = null;

    /**
     * @ElementName searchCriteriaExactUserDepartment
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment|null
     */
    private $searchCriteriaExactUserDepartment = null;

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
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for isExtendedInfoRequested
     *
     * @ElementName isExtendedInfoRequested
     * @return bool|null
     */
    public function getIsExtendedInfoRequested()
    {
        return $this->isExtendedInfoRequested;
    }

    /**
     * Setter for isExtendedInfoRequested
     *
     * @ElementName isExtendedInfoRequested
     * @param bool|null $isExtendedInfoRequested
     * @return $this
     */
    public function setIsExtendedInfoRequested($isExtendedInfoRequested)
    {
        $this->isExtendedInfoRequested = $isExtendedInfoRequested;
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
     * Getter for searchCriteriaMobilePhoneNumber
     *
     * @ElementName searchCriteriaMobilePhoneNumber
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobilePhoneNumber[]
     */
    public function getSearchCriteriaMobilePhoneNumber()
    {
        return $this->searchCriteriaMobilePhoneNumber;
    }

    /**
     * Setter for searchCriteriaMobilePhoneNumber
     *
     * @ElementName searchCriteriaMobilePhoneNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobilePhoneNumber[] $searchCriteriaMobilePhoneNumber
     * @return $this
     */
    public function setSearchCriteriaMobilePhoneNumber(array $searchCriteriaMobilePhoneNumber)
    {
        $this->searchCriteriaMobilePhoneNumber = $searchCriteriaMobilePhoneNumber;
        return $this;
    }

    /**
     * Adder for searchCriteriaMobilePhoneNumber
     *
     * @ElementName searchCriteriaMobilePhoneNumber
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber
     * @return $this
     */
    public function addSearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber)
    {
        $this->searchCriteriaMobilePhoneNumber []= $searchCriteriaMobilePhoneNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaEmailAddress
     *
     * @ElementName searchCriteriaEmailAddress
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress[]
     */
    public function getSearchCriteriaEmailAddress()
    {
        return $this->searchCriteriaEmailAddress;
    }

    /**
     * Setter for searchCriteriaEmailAddress
     *
     * @ElementName searchCriteriaEmailAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress[] $searchCriteriaEmailAddress
     * @return $this
     */
    public function setSearchCriteriaEmailAddress(array $searchCriteriaEmailAddress)
    {
        $this->searchCriteriaEmailAddress = $searchCriteriaEmailAddress;
        return $this;
    }

    /**
     * Adder for searchCriteriaEmailAddress
     *
     * @ElementName searchCriteriaEmailAddress
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaEmailAddress $searchCriteriaEmailAddress
     * @return $this
     */
    public function addSearchCriteriaEmailAddress($searchCriteriaEmailAddress)
    {
        $this->searchCriteriaEmailAddress []= $searchCriteriaEmailAddress;
        return $this;
    }

    /**
     * Getter for searchCriteriaYahooId
     *
     * @ElementName searchCriteriaYahooId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaYahooId[]
     */
    public function getSearchCriteriaYahooId()
    {
        return $this->searchCriteriaYahooId;
    }

    /**
     * Setter for searchCriteriaYahooId
     *
     * @ElementName searchCriteriaYahooId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaYahooId[] $searchCriteriaYahooId
     * @return $this
     */
    public function setSearchCriteriaYahooId(array $searchCriteriaYahooId)
    {
        $this->searchCriteriaYahooId = $searchCriteriaYahooId;
        return $this;
    }

    /**
     * Adder for searchCriteriaYahooId
     *
     * @ElementName searchCriteriaYahooId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaYahooId $searchCriteriaYahooId
     * @return $this
     */
    public function addSearchCriteriaYahooId($searchCriteriaYahooId)
    {
        $this->searchCriteriaYahooId []= $searchCriteriaYahooId;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactUserGroup
     *
     * @ElementName searchCriteriaExactUserGroup
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup|null
     */
    public function getSearchCriteriaExactUserGroup()
    {
        return $this->searchCriteriaExactUserGroup;
    }

    /**
     * Setter for searchCriteriaExactUserGroup
     *
     * @ElementName searchCriteriaExactUserGroup
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup|null $searchCriteriaExactUserGroup
     * @return $this
     */
    public function setSearchCriteriaExactUserGroup(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserGroup $searchCriteriaExactUserGroup)
    {
        $this->searchCriteriaExactUserGroup = $searchCriteriaExactUserGroup;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactUserDepartment
     *
     * @ElementName searchCriteriaExactUserDepartment
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment|null
     */
    public function getSearchCriteriaExactUserDepartment()
    {
        return $this->searchCriteriaExactUserDepartment;
    }

    /**
     * Setter for searchCriteriaExactUserDepartment
     *
     * @ElementName searchCriteriaExactUserDepartment
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment|null $searchCriteriaExactUserDepartment
     * @return $this
     */
    public function setSearchCriteriaExactUserDepartment(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactUserDepartment $searchCriteriaExactUserDepartment)
    {
        $this->searchCriteriaExactUserDepartment = $searchCriteriaExactUserDepartment;
        return $this;
    }


}

