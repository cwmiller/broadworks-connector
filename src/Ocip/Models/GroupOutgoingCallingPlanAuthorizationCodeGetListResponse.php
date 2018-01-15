<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanAuthorizationCodeGetListResponse
 *
 * Response to GroupOutgoingCallingPlanAuthorizationCodeGetListRequest.
 */
class GroupOutgoingCallingPlanAuthorizationCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupCodeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanGroupAuthorizationCodes|null
     */
    private $groupCodeList = null;

    /**
     * @ElementName departmentCodeList
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentAuthorizationCodes[]
     */
    private $departmentCodeList = array(
        
    );

    /**
     * Getter for groupCodeList
     *
     * @ElementName groupCodeList
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanGroupAuthorizationCodes|null
     */
    public function getGroupCodeList()
    {
        return $this->groupCodeList;
    }

    /**
     * Setter for groupCodeList
     *
     * @ElementName groupCodeList
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanGroupAuthorizationCodes|null $groupCodeList
     * @return $this
     */
    public function setGroupCodeList($groupCodeList)
    {
        $this->groupCodeList = $groupCodeList;
        return $this;
    }

    /**
     * Getter for departmentCodeList
     *
     * @ElementName departmentCodeList
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentAuthorizationCodes[]
     */
    public function getDepartmentCodeList()
    {
        return $this->departmentCodeList;
    }

    /**
     * Setter for departmentCodeList
     *
     * @ElementName departmentCodeList
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentAuthorizationCodes[] $departmentCodeList
     * @return $this
     */
    public function setDepartmentCodeList($departmentCodeList)
    {
        $this->departmentCodeList = $departmentCodeList;
        return $this;
    }

    /**
     * Adder for departmentCodeList
     *
     * @ElementName departmentCodeList
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentAuthorizationCodes $departmentCodeList
     * @return $this
     */
    public function addDepartmentCodeList($departmentCodeList)
    {
        $this->departmentCodeList []= $departmentCodeList;
        return $this;
    }


}

