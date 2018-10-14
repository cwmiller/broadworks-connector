<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterGetSupervisorListResponse16
 *
 * Response to the GroupCallCenterGetSupervisorListRequest16.
 *         Contains a table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name",
 *         "Phone Number", "Extension", "Department", "Email Address".
 *
 * @see GroupCallCenterGetSupervisorListRequest16
 */
class GroupCallCenterGetSupervisorListResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setSupervisorTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $supervisorTable)
    {
        $this->supervisorTable = $supervisorTable;
        return $this;
    }


}

