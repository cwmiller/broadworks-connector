<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanTransferNumbersGetListResponse
 *
 * Response to GroupOutgoingCallingPlanTransferNumbersGetListRequest.
 *
 * @see GroupOutgoingCallingPlanTransferNumbersGetListRequest
 */
class GroupOutgoingCallingPlanTransferNumbersGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName groupNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers|null
     */
    private $groupNumbers = null;

    /**
     * @ElementName departmentNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbers
     * @Array
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbers[]
     */
    private $departmentNumbers = array(
        
    );

    /**
     * Getter for groupNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers
     */
    public function getGroupNumbers()
    {
        return $this->groupNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupNumbers;
    }

    /**
     * Setter for groupNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers $groupNumbers
     * @return $this
     */
    public function setGroupNumbers(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers $groupNumbers)
    {
        $this->groupNumbers = $groupNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupNumbers()
    {
        $this->groupNumbers = null;
        return $this;
    }

    /**
     * Getter for departmentNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbers[]
     */
    public function getDepartmentNumbers()
    {
        return $this->departmentNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentNumbers;
    }

    /**
     * Setter for departmentNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbers[] $departmentNumbers
     * @return $this
     */
    public function setDepartmentNumbers(array $departmentNumbers)
    {
        $this->departmentNumbers = $departmentNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentNumbers()
    {
        $this->departmentNumbers = null;
        return $this;
    }

    /**
     * Adder for departmentNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbers $departmentNumbers
     * @return $this
     */
    public function addDepartmentNumbers($departmentNumbers)
    {
        $this->departmentNumbers[] = $departmentNumbers;
        return $this;
    }


}

