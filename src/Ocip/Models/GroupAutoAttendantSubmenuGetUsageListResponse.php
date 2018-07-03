<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuGetUsageListResponse
 *
 * Response to the GroupAutoAttendantSubmenuGetUsageListRequest.
 *         Contains a table with column headings:
 *         "Type" and "Submenu ID".
 *         
 *         The "Type" Column will contain one of the following: Business Hours
 * Menu,
 *         After Hours Menu, Holiday Menu or Submenu.
 *         
 *         The "Submenu ID" Column will be left blank when the "Type" Column
 * contains one
 *         of the base menu types (Business Hours Menu, After Hours Menu or Holiday
 * Menu),
 *         and will contain the Submenu ID when the "Type" Column contains type
 * Submenu.
 *
 * @see GroupAutoAttendantSubmenuGetUsageListRequest
 */
class GroupAutoAttendantSubmenuGetUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName submenuTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $submenuTable = null;

    /**
     * Getter for submenuTable
     *
     * @ElementName submenuTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSubmenuTable()
    {
        return $this->submenuTable;
    }

    /**
     * Setter for submenuTable
     *
     * @ElementName submenuTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $submenuTable
     * @return $this
     */
    public function setSubmenuTable($submenuTable)
    {
        $this->submenuTable = $submenuTable;
        return $this;
    }


}

