<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPhoneDirectoryGetPagedSortedListResponse
 *
 * Response to UserPhoneDirectoryGetPagedSortedListRequest.
 * 	    Returns the number of entries that would be returned if the response
 * 	    Was not page size restricted.
 * 	    The "My Room Room Id" and "My Room Bridge Id" are only populated for 
 *         users assigned the "Collaborate-Audio" service.
 *         Contains a table with a row for each user and column headings:
 * 	    "User Id", "CLID First Name", "CLID Last Name", "First Name",
 * 	    "Last Name", "Hiragana First Name", "Hiragana Last Name",
 * 	    "Title", "Phone Number", "Extension", "Mobile", "Pager",
 * 	    "Email Address", "Yahoo Id", "Department", "Group Id", "Location",
 * 	    "Address Line 1", "Address Line 2", "City", "State", "Zip",
 * 	    "Country", "IMP Id", "Location Code", "My Room Room Id", 
 *         "My Room Bridge Id".
 */
class UserPhoneDirectoryGetPagedSortedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName directoryTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $directoryTable = null;

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
     * Getter for directoryTable
     *
     * @ElementName directoryTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDirectoryTable()
    {
        return $this->directoryTable;
    }

    /**
     * Setter for directoryTable
     *
     * @ElementName directoryTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $directoryTable
     * @return $this
     */
    public function setDirectoryTable($directoryTable)
    {
        $this->directoryTable = $directoryTable;
        return $this;
    }


}

