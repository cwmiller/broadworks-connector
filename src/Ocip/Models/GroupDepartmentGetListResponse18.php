<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentGetListResponse18
 *
 * Response to GroupDepartmentGetListRequest18.
 *         Contains a table of department attributes.
 *         The column headings are: "Is Enterprise Department", "Department Name", "Full Path Name", "Calling Line Id Name", and "Calling Line Id Phone Number"
 *
 * @see GroupDepartmentGetListRequest18
 * @Groups [{"id":"4b0e7857796c636464362260a2f8e5ee:3693","type":"sequence"}]
 */
class GroupDepartmentGetListResponse18 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName departmentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 4b0e7857796c636464362260a2f8e5ee:3693
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $departmentTable = null;

    /**
     * Getter for departmentTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDepartmentTable()
    {
        return $this->departmentTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentTable;
    }

    /**
     * Setter for departmentTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $departmentTable
     * @return $this
     */
    public function setDepartmentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $departmentTable)
    {
        $this->departmentTable = $departmentTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentTable()
    {
        $this->departmentTable = null;
        return $this;
    }
}

