<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRoutePointSupervisorGetListResponse
 *
 * Response to the UserRoutePointSupervisorGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address",
 * 		"Location Code".
 */
class UserRoutePointSupervisorGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName supervisorTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $supervisorTable = null;

    /**
     * Getter for supervisorTable
     *
     * @ElementName supervisorTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getSupervisorTable()
    {
        return $this->supervisorTable;
    }

    /**
     * Setter for supervisorTable
     *
     * @ElementName supervisorTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $supervisorTable
     * @return $this
     */
    public function setSupervisorTable($supervisorTable)
    {
        $this->supervisorTable = $supervisorTable;
        return $this;
    }


}

