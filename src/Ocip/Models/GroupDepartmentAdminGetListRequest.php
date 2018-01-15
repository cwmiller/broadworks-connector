<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentAdminGetListRequest
 *
 * Get a list of department administrators for the department.
 *         The response is either a GroupDepartmentAdminGetListResponse or an
 * ErrorResponse.
 */
class GroupDepartmentAdminGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName departmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * Getter for departmentKey
     *
     * @ElementName departmentKey
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey|null
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey;
    }

    /**
     * Setter for departmentKey
     *
     * @ElementName departmentKey
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey|null $departmentKey
     * @return $this
     */
    public function setDepartmentKey($departmentKey)
    {
        $this->departmentKey = $departmentKey;
        return $this;
    }


}

