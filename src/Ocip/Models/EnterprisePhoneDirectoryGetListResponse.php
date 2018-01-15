<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterprisePhoneDirectoryGetListResponse
 *
 * Response to EnterprisePhoneDirectoryGetListRequest.
 *          Contains a table with  a row for each phone number and column headings
 * :
 *          "Name", "Number", "Extension", "Mobile", "Email Address", "Department",
 * "Hiragana Name", "Group Id", "Yahoo Id".
 *          If extended directory information is requested, the following columns
 * are also included:
 *          "First Name", "Last Name", "User Id", "Pager", "Title", "Time Zone",
 * "Location", "Address Line 1", "Address Line 2",
 *          "City", "State", "Zip", "Country".
 *
 *          Replace by: EnterprisePhoneDirectoryGetListResponse17
 */
class EnterprisePhoneDirectoryGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

