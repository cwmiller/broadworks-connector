<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanAuthorizationCodeGetListResponse
 *
 * Response to GroupOutgoingCallingPlanAuthorizationCodeGetListRequest.
 *
 * @see GroupOutgoingCallingPlanAuthorizationCodeGetListRequest
 * @Groups [{"id":"8366f5f5d1fbfb9742236aba282c1dab:124","type":"sequence"}]
 */
class GroupOutgoingCallingPlanAuthorizationCodeGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupCodeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanGroupAuthorizationCodes
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:124
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanGroupAuthorizationCodes|null
     */
    private $groupCodeList = null;

    /**
     * @ElementName departmentCodeList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentAuthorizationCodes
     * @Array
     * @Optional
     * @Group 8366f5f5d1fbfb9742236aba282c1dab:124
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentAuthorizationCodes[]
     */
    private $departmentCodeList = array(
        
    );

    /**
     * Getter for groupCodeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanGroupAuthorizationCodes
     */
    public function getGroupCodeList()
    {
        return $this->groupCodeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupCodeList;
    }

    /**
     * Setter for groupCodeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanGroupAuthorizationCodes $groupCodeList
     * @return $this
     */
    public function setGroupCodeList(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanGroupAuthorizationCodes $groupCodeList)
    {
        $this->groupCodeList = $groupCodeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupCodeList()
    {
        $this->groupCodeList = null;
        return $this;
    }

    /**
     * Getter for departmentCodeList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentAuthorizationCodes[]
     */
    public function getDepartmentCodeList()
    {
        return $this->departmentCodeList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentCodeList;
    }

    /**
     * Setter for departmentCodeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentAuthorizationCodes[] $departmentCodeList
     * @return $this
     */
    public function setDepartmentCodeList(array $departmentCodeList)
    {
        $this->departmentCodeList = $departmentCodeList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentCodeList()
    {
        $this->departmentCodeList = null;
        return $this;
    }

    /**
     * Adder for departmentCodeList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentAuthorizationCodes $departmentCodeList
     * @return $this
     */
    public function addDepartmentCodeList($departmentCodeList)
    {
        $this->departmentCodeList[] = $departmentCodeList;
        return $this;
    }


}

