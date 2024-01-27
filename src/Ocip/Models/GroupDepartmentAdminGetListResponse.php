<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentAdminGetListResponse
 *
 * Response to GroupDepartmentAdminGetListRequest.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Department", "Language".
 *
 * @see GroupDepartmentAdminGetListRequest
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:3529","type":"sequence"}]
 */
class GroupDepartmentAdminGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName departmentAdminTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:3529
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $departmentAdminTable = null;

    /**
     * Getter for departmentAdminTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDepartmentAdminTable()
    {
        return $this->departmentAdminTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentAdminTable;
    }

    /**
     * Setter for departmentAdminTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $departmentAdminTable
     * @return $this
     */
    public function setDepartmentAdminTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $departmentAdminTable)
    {
        $this->departmentAdminTable = $departmentAdminTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentAdminTable()
    {
        $this->departmentAdminTable = null;
        return $this;
    }
}

