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
 * 				"Mobile", "Email Address", "Yahoo Id", "Title", "IMP Id".
 * 				If the entry represents a Virtual On-Net user then "User Id" is blank,
 * 				the "Virtual On-Net Phone Number" contains the phone Number of the
 * 				Virtual On-Net user, the "Group Id" contains the Virtual On-Net
 * 				user's
 * 				group and the "Is Virtual On-Net User" contains true.
 * 				If the entry represents a BroadWorks user then the "User Id" contains
 * 				his BroadWorks userId, the "Virtual On-Net Phone Number" and
 * 				"Group Id" fields are field is blank and the "Is Virtual On-Net User"
 * 				contains false.
 */
class UserGroupCustomContactDirectoryGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName userTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $userTable = null;

    /**
     * Getter for totalNumberOfRows
     *
     * @ElementName totalNumberOfRows
     * @return int|null
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @ElementName totalNumberOfRows
     * @param int|null $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

    /**
     * Getter for userTable
     *
     * @ElementName userTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUserTable()
    {
        return $this->userTable;
    }

    /**
     * Setter for userTable
     *
     * @ElementName userTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $userTable
     * @return $this
     */
    public function setUserTable($userTable)
    {
        $this->userTable = $userTable;
        return $this;
    }


}

