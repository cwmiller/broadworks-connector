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
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName responsePagingControl
     * @var \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    private $responsePagingControl = null;

    /**
     * @ElementName sortByUserLastName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    private $sortByUserLastName = null;

    /**
     * @ElementName sortByUserFirstName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null
     */
    private $sortByUserFirstName = null;

    /**
     * @ElementName sortByUserDepartment
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment|null
     */
    private $sortByUserDepartment = null;

    /**
     * @ElementName sortByReceptionistNote
     * @var \CWM\BroadWorksConnector\Ocip\Models\SortByReceptionistNote|null
     */
    private $sortByReceptionistNote = null;

    /**
     * @ElementName searchCriteriaModeOr
     * @var bool|null
     */
    private $searchCriteriaModeOr = null;

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
     * @ElementName searchCriteriaUserId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    private $searchCriteriaUserId = array(
        
    );

    /**
     * @ElementName searchCriteriaDepartmentName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[]
     */
    private $searchCriteriaDepartmentName = array(
        
    );

    /**
     * @ElementName searchCriteriaImpId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaImpId[]
     */
    private $searchCriteriaImpId = array(
        
    );

    /**
     * @ElementName searchCriteriaTitle
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTitle[]
     */
    private $searchCriteriaTitle = array(
        
    );

    /**
     * @ElementName searchCriteriaReceptionistNote
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaReceptionistNote[]
     */
    private $searchCriteriaReceptionistNote = array(
        
    );

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
     * Getter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @return \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null
     */
    public function getResponsePagingControl()
    {
        return $this->responsePagingControl;
    }

    /**
     * Setter for responsePagingControl
     *
     * @ElementName responsePagingControl
     * @param \CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl|null $responsePagingControl
     * @return $this
     */
    public function setResponsePagingControl(\CWM\BroadWorksConnector\Ocip\Models\ResponsePagingControl $responsePagingControl)
    {
        $this->responsePagingControl = $responsePagingControl;
        return $this;
    }

    /**
     * Getter for sortByUserLastName
     *
     * @ElementName sortByUserLastName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null
     */
    public function getSortByUserLastName()
    {
        return $this->sortByUserLastName;
    }

    /**
     * Setter for sortByUserLastName
     *
     * @ElementName sortByUserLastName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName|null $sortByUserLastName
     * @return $this
     */
    public function setSortByUserLastName(\CWM\BroadWorksConnector\Ocip\Models\SortByUserLastName $sortByUserLastName)
    {
        $this->sortByUserLastName = $sortByUserLastName;
        return $this;
    }

    /**
     * Getter for sortByUserFirstName
     *
     * @ElementName sortByUserFirstName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null
     */
    public function getSortByUserFirstName()
    {
        return $this->sortByUserFirstName;
    }

    /**
     * Setter for sortByUserFirstName
     *
     * @ElementName sortByUserFirstName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName|null $sortByUserFirstName
     * @return $this
     */
    public function setSortByUserFirstName(\CWM\BroadWorksConnector\Ocip\Models\SortByUserFirstName $sortByUserFirstName)
    {
        $this->sortByUserFirstName = $sortByUserFirstName;
        return $this;
    }

    /**
     * Getter for sortByUserDepartment
     *
     * @ElementName sortByUserDepartment
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment|null
     */
    public function getSortByUserDepartment()
    {
        return $this->sortByUserDepartment;
    }

    /**
     * Setter for sortByUserDepartment
     *
     * @ElementName sortByUserDepartment
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment|null $sortByUserDepartment
     * @return $this
     */
    public function setSortByUserDepartment(\CWM\BroadWorksConnector\Ocip\Models\SortByUserDepartment $sortByUserDepartment)
    {
        $this->sortByUserDepartment = $sortByUserDepartment;
        return $this;
    }

    /**
     * Getter for sortByReceptionistNote
     *
     * @ElementName sortByReceptionistNote
     * @return \CWM\BroadWorksConnector\Ocip\Models\SortByReceptionistNote|null
     */
    public function getSortByReceptionistNote()
    {
        return $this->sortByReceptionistNote;
    }

    /**
     * Setter for sortByReceptionistNote
     *
     * @ElementName sortByReceptionistNote
     * @param \CWM\BroadWorksConnector\Ocip\Models\SortByReceptionistNote|null $sortByReceptionistNote
     * @return $this
     */
    public function setSortByReceptionistNote(\CWM\BroadWorksConnector\Ocip\Models\SortByReceptionistNote $sortByReceptionistNote)
    {
        $this->sortByReceptionistNote = $sortByReceptionistNote;
        return $this;
    }

    /**
     * Getter for searchCriteriaModeOr
     *
     * @ElementName searchCriteriaModeOr
     * @return bool|null
     */
    public function getSearchCriteriaModeOr()
    {
        return $this->searchCriteriaModeOr;
    }

    /**
     * Setter for searchCriteriaModeOr
     *
     * @ElementName searchCriteriaModeOr
     * @param bool|null $searchCriteriaModeOr
     * @return $this
     */
    public function setSearchCriteriaModeOr($searchCriteriaModeOr)
    {
        $this->searchCriteriaModeOr = $searchCriteriaModeOr;
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
     * Getter for searchCriteriaUserId
     *
     * @ElementName searchCriteriaUserId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[]
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId;
    }

    /**
     * Setter for searchCriteriaUserId
     *
     * @ElementName searchCriteriaUserId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId[] $searchCriteriaUserId
     * @return $this
     */
    public function setSearchCriteriaUserId(array $searchCriteriaUserId)
    {
        $this->searchCriteriaUserId = $searchCriteriaUserId;
        return $this;
    }

    /**
     * Adder for searchCriteriaUserId
     *
     * @ElementName searchCriteriaUserId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaUserId $searchCriteriaUserId
     * @return $this
     */
    public function addSearchCriteriaUserId($searchCriteriaUserId)
    {
        $this->searchCriteriaUserId []= $searchCriteriaUserId;
        return $this;
    }

    /**
     * Getter for searchCriteriaDepartmentName
     *
     * @ElementName searchCriteriaDepartmentName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[]
     */
    public function getSearchCriteriaDepartmentName()
    {
        return $this->searchCriteriaDepartmentName;
    }

    /**
     * Setter for searchCriteriaDepartmentName
     *
     * @ElementName searchCriteriaDepartmentName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName[] $searchCriteriaDepartmentName
     * @return $this
     */
    public function setSearchCriteriaDepartmentName(array $searchCriteriaDepartmentName)
    {
        $this->searchCriteriaDepartmentName = $searchCriteriaDepartmentName;
        return $this;
    }

    /**
     * Adder for searchCriteriaDepartmentName
     *
     * @ElementName searchCriteriaDepartmentName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaDepartmentName $searchCriteriaDepartmentName
     * @return $this
     */
    public function addSearchCriteriaDepartmentName($searchCriteriaDepartmentName)
    {
        $this->searchCriteriaDepartmentName []= $searchCriteriaDepartmentName;
        return $this;
    }

    /**
     * Getter for searchCriteriaImpId
     *
     * @ElementName searchCriteriaImpId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaImpId[]
     */
    public function getSearchCriteriaImpId()
    {
        return $this->searchCriteriaImpId;
    }

    /**
     * Setter for searchCriteriaImpId
     *
     * @ElementName searchCriteriaImpId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaImpId[] $searchCriteriaImpId
     * @return $this
     */
    public function setSearchCriteriaImpId(array $searchCriteriaImpId)
    {
        $this->searchCriteriaImpId = $searchCriteriaImpId;
        return $this;
    }

    /**
     * Adder for searchCriteriaImpId
     *
     * @ElementName searchCriteriaImpId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaImpId $searchCriteriaImpId
     * @return $this
     */
    public function addSearchCriteriaImpId($searchCriteriaImpId)
    {
        $this->searchCriteriaImpId []= $searchCriteriaImpId;
        return $this;
    }

    /**
     * Getter for searchCriteriaTitle
     *
     * @ElementName searchCriteriaTitle
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTitle[]
     */
    public function getSearchCriteriaTitle()
    {
        return $this->searchCriteriaTitle;
    }

    /**
     * Setter for searchCriteriaTitle
     *
     * @ElementName searchCriteriaTitle
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTitle[] $searchCriteriaTitle
     * @return $this
     */
    public function setSearchCriteriaTitle(array $searchCriteriaTitle)
    {
        $this->searchCriteriaTitle = $searchCriteriaTitle;
        return $this;
    }

    /**
     * Adder for searchCriteriaTitle
     *
     * @ElementName searchCriteriaTitle
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaTitle $searchCriteriaTitle
     * @return $this
     */
    public function addSearchCriteriaTitle($searchCriteriaTitle)
    {
        $this->searchCriteriaTitle []= $searchCriteriaTitle;
        return $this;
    }

    /**
     * Getter for searchCriteriaReceptionistNote
     *
     * @ElementName searchCriteriaReceptionistNote
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaReceptionistNote[]
     */
    public function getSearchCriteriaReceptionistNote()
    {
        return $this->searchCriteriaReceptionistNote;
    }

    /**
     * Setter for searchCriteriaReceptionistNote
     *
     * @ElementName searchCriteriaReceptionistNote
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaReceptionistNote[] $searchCriteriaReceptionistNote
     * @return $this
     */
    public function setSearchCriteriaReceptionistNote(array $searchCriteriaReceptionistNote)
    {
        $this->searchCriteriaReceptionistNote = $searchCriteriaReceptionistNote;
        return $this;
    }

    /**
     * Adder for searchCriteriaReceptionistNote
     *
     * @ElementName searchCriteriaReceptionistNote
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaReceptionistNote $searchCriteriaReceptionistNote
     * @return $this
     */
    public function addSearchCriteriaReceptionistNote($searchCriteriaReceptionistNote)
    {
        $this->searchCriteriaReceptionistNote []= $searchCriteriaReceptionistNote;
        return $this;
    }


}

