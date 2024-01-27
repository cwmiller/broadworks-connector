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
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:4852","type":"sequence"}]
 */
class GroupCallCenterGetSupervisorListResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName supervisorTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4d65d3449061c568639c8cc1e2492285:4852
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $supervisorTable = null;

    /**
     * Getter for supervisorTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getSupervisorTable()
    {
        return $this->supervisorTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supervisorTable;
    }

    /**
     * Setter for supervisorTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $supervisorTable
     * @return $this
     */
    public function setSupervisorTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $supervisorTable)
    {
        $this->supervisorTable = $supervisorTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupervisorTable()
    {
        $this->supervisorTable = null;
        return $this;
    }
}

