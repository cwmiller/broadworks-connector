<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentGetListResponse18
 *
 * Response to GroupDepartmentGetListRequest18.
 *         Contains a table of department attributes.
 *         The column headings are: "Is Enterprise Department", "Department Name",
 * "Full Path Name", "Calling Line Id Name", and "Calling Line Id Phone Number"
 *
 * @see GroupDepartmentGetListRequest18
 */
class GroupDepartmentGetListResponse18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName departmentTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $departmentTable = null;

    /**
     * Getter for departmentTable
     *
     * @ElementName departmentTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDepartmentTable()
    {
        return $this->departmentTable;
    }

    /**
     * Setter for departmentTable
     *
     * @ElementName departmentTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $departmentTable
     * @return $this
     */
    public function setDepartmentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $departmentTable)
    {
        $this->departmentTable = $departmentTable;
        return $this;
    }


}

