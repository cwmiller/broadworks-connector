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
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers|null
     */
    private $groupNumbers = null;

    /**
     * @ElementName departmentNumbers
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbers[]
     */
    private $departmentNumbers = array(
        
    );

    /**
     * Getter for groupNumbers
     *
     * @ElementName groupNumbers
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers|null
     */
    public function getGroupNumbers()
    {
        return $this->groupNumbers;
    }

    /**
     * Setter for groupNumbers
     *
     * @ElementName groupNumbers
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers|null $groupNumbers
     * @return $this
     */
    public function setGroupNumbers($groupNumbers)
    {
        $this->groupNumbers = $groupNumbers;
        return $this;
    }

    /**
     * Getter for departmentNumbers
     *
     * @ElementName departmentNumbers
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbers[]
     */
    public function getDepartmentNumbers()
    {
        return $this->departmentNumbers;
    }

    /**
     * Setter for departmentNumbers
     *
     * @ElementName departmentNumbers
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbers[] $departmentNumbers
     * @return $this
     */
    public function setDepartmentNumbers($departmentNumbers)
    {
        $this->departmentNumbers = $departmentNumbers;
        return $this;
    }

    /**
     * Adder for departmentNumbers
     *
     * @ElementName departmentNumbers
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbers $departmentNumbers
     * @return $this
     */
    public function addDepartmentNumbers($departmentNumbers)
    {
        $this->departmentNumbers []= $departmentNumbers;
        return $this;
    }


}

