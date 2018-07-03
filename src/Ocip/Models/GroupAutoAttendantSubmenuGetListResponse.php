<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupAutoAttendantSubmenuGetListResponse
 *
 * Response to the GroupAutoAttendantSubmenuGetListRequest.
 *         Contains a table with column headings:
 *         "Submenu Id" "Is Used".
 *         The column values for "Is Used" can either be true, or false.
 *
 * @see GroupAutoAttendantSubmenuGetListRequest
 */
class GroupAutoAttendantSubmenuGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

