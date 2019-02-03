<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserGroupCustomContactDirectoryGetPagedSortedListResponse
 *
 * Response to the UserGroupCustomContactDirectoryGetPagedSortedListRequest.
 * 	
 * 				Returns the number of entries that would be returned if the response
 * 				Was not page size restricted.
 * 	
 * 				The response contains all the contacts in the group's given custom
 * 				contact directory. Contains a table with column headings: "User Id",
 * 				"Last Name", "First Name", "Hiragana Last Name",
 * 				"Hiragana First Name", "Virtual On-Net Phone Number", "Group Id",
 * 				"Is Virtual On-Net User", "Department", "Phone Number", "Extension",
 * 				"Mobile", "Email Address", "Yahoo Id", "Title", "IMP Id", "Receptionist Note".
 * 				If the entry represents a Virtual On-Net user then "User Id" is blank,
 * 				the "Virtual On-Net Phone Number" contains the phone Number of the
 * 				Virtual On-Net user, the "Group Id" contains the Virtual On-Net
 * 				user's
 * 				group and the "Is Virtual On-Net User" contains true.
 * 				If the entry represents a BroadWorks user then the "User Id" contains
 * 				his BroadWorks userId, the "Virtual On-Net Phone Number" and
 * 				"Group Id" fields are field is blank and the "Is Virtual On-Net User"
 * 				contains false.  The Receptionist Note column is only populated, if the 
 *         user sending the request is the owner of this Receptionist Note and a 
 *         Note exists.
 *
 * @see UserGroupCustomContactDirectoryGetPagedSortedListRequest
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:2398","type":"sequence"}]
 */
class UserGroupCustomContactDirectoryGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2398
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName userTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 53d18cc797d03d802cbc411ad821f1d4:2398
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for totalNumberOfRows
     *
     * @return int
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @param int $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalNumberOfRows()
    {
        $this->totalNumberOfRows = null;
        return $this;
    }

    /**
     * Getter for userTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUserTable()
    {
        return $this->userTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable
     * @return $this
     */
    public function setUserTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserTable()
    {
        $this->userTable = null;
        return $this;
    }


}

