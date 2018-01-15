<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPhoneDirectoryGetSearchedListResponse
 *
 * Response to UserPhoneDirectoryGetSearchedListRequest.
 *         The "My Room Room Id" and "My Room Bridge Id" are only populated for
 * 	    users assigned the "Collaborate-Audio" service.
 *         Contains a table with  a row for each phone number and column headings :
 *         "Name", "Number", "Extension", "Mobile", "Email Address", "Department", 
 *         "Hiragana Name", "Group Id", "Yahoo Id", "User Id", "IMP Id", "First
 * Name", "Last Name",
 *         "My Room Room Id", "My Room Bridge Id".
 */
class UserPhoneDirectoryGetSearchedListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName directoryTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $directoryTable = null;

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

