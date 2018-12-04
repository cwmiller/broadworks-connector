<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentAdminGetListRequest
 *
 * Get a list of department administrators for the department.
 *         The response is either a GroupDepartmentAdminGetListResponse or an ErrorResponse.
 *
 * @see GroupDepartmentAdminGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7a7d0e1e7f776baf61f0645bc15cbe16:2818","type":"sequence"}]
 */
class GroupDepartmentAdminGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Group 7a7d0e1e7f776baf61f0645bc15cbe16:2818
     * @var \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * Getter for departmentKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentKey;
    }

    /**
     * Setter for departmentKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey $departmentKey
     * @return $this
     */
    public function setDepartmentKey(\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey $departmentKey)
    {
        $this->departmentKey = $departmentKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentKey()
    {
        $this->departmentKey = null;
        return $this;
    }


}

