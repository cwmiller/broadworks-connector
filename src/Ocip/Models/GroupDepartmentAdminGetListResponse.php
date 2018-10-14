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
 */
class GroupDepartmentAdminGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName departmentAdminTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $departmentAdminTable = null;

    /**
     * Getter for departmentAdminTable
     *
     * @ElementName departmentAdminTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDepartmentAdminTable()
    {
        return $this->departmentAdminTable;
    }

    /**
     * Setter for departmentAdminTable
     *
     * @ElementName departmentAdminTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $departmentAdminTable
     * @return $this
     */
    public function setDepartmentAdminTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $departmentAdminTable)
    {
        $this->departmentAdminTable = $departmentAdminTable;
        return $this;
    }


}

