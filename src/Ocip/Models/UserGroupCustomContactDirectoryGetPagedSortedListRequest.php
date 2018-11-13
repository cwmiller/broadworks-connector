<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupCustomContactDirectoryGetPagedSortedListRequest
 *
 * Gets a Custom Contact Directory in a group.
 * 				The response is either
 * UserGroupCustomContactDirectoryGetPagedSortedListResponse
 * 				or ErrorResponse.
 * 				The search can be done using multiple criterion.
 * 				If the searchCriteriaModeOr is present, any result matching any one
 * 				criteria is included in the results.
 * 				Otherwise, only results matching all the search criterion are included in
 * the
 * 				results.
 * 				If no search criteria is specified, all results are returned.
 * 				Specifying searchCriteriaModeOr without any search criteria results
 * 				in an ErrorResponse.
 * 				The sort can be done on the user last name, first name, department, or 
 *         contact notes.  The Receptionist Note column is only populated, if the 
 *         user sending the request is a the owner of this Receptionist Note and a
 * Note 
 *         exists.
 *
 * @see UserGroupCustomContactDirectoryGetPagedSortedListResponse
 * @see ErrorResponse
 * @see ErrorResponse
 */
class UserGroupCustomContactDirectoryGetPagedSortedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName name
     * @Type string
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName responsePagingControl
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortByUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    private $sortByUserLastName = null;

    /**
     * @ElementName sortByUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null
     */
    private $sortByUserFirstName = null;

    /**
     * @ElementName sortByUserDepartment
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment|null
     */
    private $sortByUserDepartment = null;

    /**
     * @ElementName sortByReceptionistNote
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SortByReceptionistNote
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByReceptionistNote|null
     */
    private $sortByReceptionistNote = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @Type bool
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

    /**
     * @ElementName searchCriteriaUserLastName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserLastName[]
     */
    private $searchCriteriaUserLastName = array(
        
    );

    /**
     * @ElementName searchCriteriaUserFirstName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserFirstName[]
     */
    private $searchCriteriaUserFirstName = array(
        
    );

    /**
     * @ElementName searchCriteriaDn
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDn[]
     */
    private $searchCriteriaDn = array(
        
    );

    /**
     * @ElementName searchCriteriaExtension
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExtension[]
     */
    private $searchCriteriaExtension = array(
        
    );

    /**
     * @ElementName searchCriteriaMobilePhoneNumber
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobilePhoneNumber
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobilePhoneNumber[]
     */
    private $searchCriteriaMobilePhoneNumber = array(
        
    );

    /**
     * @ElementName searchCriteriaUserId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    private $searchCriteriaUserId = array(
        
    );

    /**
     * @ElementName searchCriteriaDepartmentName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[]
     */
    private $searchCriteriaDepartmentName = array(
        
    );

    /**
     * @ElementName searchCriteriaImpId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaImpId
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaImpId[]
     */
    private $searchCriteriaImpId = array(
        
    );

    /**
     * @ElementName searchCriteriaTitle
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTitle
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTitle[]
     */
    private $searchCriteriaTitle = array(
        
    );

    /**
     * @ElementName searchCriteriaReceptionistNote
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaReceptionistNote
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaReceptionistNote[]
     */
    private $searchCriteriaReceptionistNote = array(
        
    );

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

    /**
     * Getter for responsePagingControl
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responsePagingControl;
    }

    /**
     * Setter for responsePagingControl
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl
     * @return $this
     */
    public function setResponsePagingControl(\CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponsePagingControl()
    {
        $this->responsePagingControl = null;
        return $this;
    }

    /**
     * Getter for sortByUserLastName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName
     */
    public function getSortByUserLastName()
    {
        return $this->sortByUserLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserLastName;
    }

    /**
     * Setter for sortByUserLastName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName $sortByUserLastName
     * @return $this
     */
    public function setSortByUserLastName(\CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName $sortByUserLastName)
    {
        $this->sortByUserLastName = $sortByUserLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserLastName()
    {
        $this->sortByUserLastName = null;
        return $this;
    }

    /**
     * Getter for sortByUserFirstName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName
     */
    public function getSortByUserFirstName()
    {
        return $this->sortByUserFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserFirstName;
    }

    /**
     * Setter for sortByUserFirstName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName $sortByUserFirstName
     * @return $this
     */
    public function setSortByUserFirstName(\CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName $sortByUserFirstName)
    {
        $this->sortByUserFirstName = $sortByUserFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserFirstName()
    {
        $this->sortByUserFirstName = null;
        return $this;
    }

    /**
     * Getter for sortByUserDepartment
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment
     */
    public function getSortByUserDepartment()
    {
        return $this->sortByUserDepartment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByUserDepartment;
    }

    /**
     * Setter for sortByUserDepartment
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment $sortByUserDepartment
     * @return $this
     */
    public function setSortByUserDepartment(\CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment $sortByUserDepartment)
    {
        $this->sortByUserDepartment = $sortByUserDepartment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByUserDepartment()
    {
        $this->sortByUserDepartment = null;
        return $this;
    }

    /**
     * Getter for sortByReceptionistNote
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByReceptionistNote
     */
    public function getSortByReceptionistNote()
    {
        return $this->sortByReceptionistNote instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sortByReceptionistNote;
    }

    /**
     * Setter for sortByReceptionistNote
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByReceptionistNote $sortByReceptionistNote
     * @return $this
     */
    public function setSortByReceptionistNote(\CWM\BroadWorksConnector\Ocip\Models\SortByReceptionistNote $sortByReceptionistNote)
    {
        $this->sortByReceptionistNote = $sortByReceptionistNote;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSortByReceptionistNote()
    {
        $this->sortByReceptionistNote = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaModeOr
     *
     * @return bool
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaModeOr;
    }

    /**
     * Setter for searchCriteriaModeOr
     *
     * @param bool $searchCriteriaModeOr
     * @return $this
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr)
    {
        $this->searchCriteriaModeOr = $searchCriteriaModeOr;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaModeOr()
    {
        $this->searchCriteriaModeOr = null;
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
     * Getter for searchCriteriaMobilePhoneNumber
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobilePhoneNumber[]
     */
    public function getSearchCriteriaMobilePhoneNumber()
    {
        return $this->searchCriteriaMobilePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaMobilePhoneNumber;
    }

    /**
     * Setter for searchCriteriaMobilePhoneNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobilePhoneNumber[] $searchCriteriaMobilePhoneNumber
     * @return $this
     */
    public function setSearchCriteriaMobilePhoneNumber(array $searchCriteriaMobilePhoneNumber)
    {
        $this->searchCriteriaMobilePhoneNumber = $searchCriteriaMobilePhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaMobilePhoneNumber()
    {
        $this->searchCriteriaMobilePhoneNumber = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaMobilePhoneNumber
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaMobilePhoneNumber $searchCriteriaMobilePhoneNumber
     * @return $this
     */
    public function addSearchCriteriaMobilePhoneNumber($searchCriteriaMobilePhoneNumber)
    {
        $this->searchCriteriaMobilePhoneNumber[] = $searchCriteriaMobilePhoneNumber;
        return $this;
    }

    /**
     * Getter for searchCriteriaUserId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaUserId;
    }

    /**
     * Setter for searchCriteriaUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[] $searchCriteriaUserId
     * @return $this
     */
    public function setSearchCriteriaUserId(array $searchCriteriaUserId)
    {
        $this->searchCriteriaUserId = $searchCriteriaUserId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaUserId()
    {
        $this->searchCriteriaUserId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId $searchCriteriaUserId
     * @return $this
     */
    public function addSearchCriteriaUserId($searchCriteriaUserId)
    {
        $this->searchCriteriaUserId[] = $searchCriteriaUserId;
        return $this;
    }

    /**
     * Getter for searchCriteriaDepartmentName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[]
     */
    public function getSearchCriteriaDepartmentName()
    {
        return $this->searchCriteriaDepartmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaDepartmentName;
    }

    /**
     * Setter for searchCriteriaDepartmentName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[] $searchCriteriaDepartmentName
     * @return $this
     */
    public function setSearchCriteriaDepartmentName(array $searchCriteriaDepartmentName)
    {
        $this->searchCriteriaDepartmentName = $searchCriteriaDepartmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaDepartmentName()
    {
        $this->searchCriteriaDepartmentName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaDepartmentName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName $searchCriteriaDepartmentName
     * @return $this
     */
    public function addSearchCriteriaDepartmentName($searchCriteriaDepartmentName)
    {
        $this->searchCriteriaDepartmentName[] = $searchCriteriaDepartmentName;
        return $this;
    }

    /**
     * Getter for searchCriteriaImpId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaImpId[]
     */
    public function getSearchCriteriaImpId()
    {
        return $this->searchCriteriaImpId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaImpId;
    }

    /**
     * Setter for searchCriteriaImpId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaImpId[] $searchCriteriaImpId
     * @return $this
     */
    public function setSearchCriteriaImpId(array $searchCriteriaImpId)
    {
        $this->searchCriteriaImpId = $searchCriteriaImpId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaImpId()
    {
        $this->searchCriteriaImpId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaImpId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaImpId $searchCriteriaImpId
     * @return $this
     */
    public function addSearchCriteriaImpId($searchCriteriaImpId)
    {
        $this->searchCriteriaImpId[] = $searchCriteriaImpId;
        return $this;
    }

    /**
     * Getter for searchCriteriaTitle
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTitle[]
     */
    public function getSearchCriteriaTitle()
    {
        return $this->searchCriteriaTitle instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaTitle;
    }

    /**
     * Setter for searchCriteriaTitle
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTitle[] $searchCriteriaTitle
     * @return $this
     */
    public function setSearchCriteriaTitle(array $searchCriteriaTitle)
    {
        $this->searchCriteriaTitle = $searchCriteriaTitle;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaTitle()
    {
        $this->searchCriteriaTitle = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaTitle
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTitle $searchCriteriaTitle
     * @return $this
     */
    public function addSearchCriteriaTitle($searchCriteriaTitle)
    {
        $this->searchCriteriaTitle[] = $searchCriteriaTitle;
        return $this;
    }

    /**
     * Getter for searchCriteriaReceptionistNote
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaReceptionistNote[]
     */
    public function getSearchCriteriaReceptionistNote()
    {
        return $this->searchCriteriaReceptionistNote instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaReceptionistNote;
    }

    /**
     * Setter for searchCriteriaReceptionistNote
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaReceptionistNote[] $searchCriteriaReceptionistNote
     * @return $this
     */
    public function setSearchCriteriaReceptionistNote(array $searchCriteriaReceptionistNote)
    {
        $this->searchCriteriaReceptionistNote = $searchCriteriaReceptionistNote;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaReceptionistNote()
    {
        $this->searchCriteriaReceptionistNote = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaReceptionistNote
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaReceptionistNote $searchCriteriaReceptionistNote
     * @return $this
     */
    public function addSearchCriteriaReceptionistNote($searchCriteriaReceptionistNote)
    {
        $this->searchCriteriaReceptionistNote[] = $searchCriteriaReceptionistNote;
        return $this;
    }


}

