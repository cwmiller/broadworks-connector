<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanDepartmentTransferNumbersModify
 *
 * Outgoing Calling Plan transfer numbers for a department.
 */
class OutgoingCallingPlanDepartmentTransferNumbersModify
{

    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName transferNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify|null
     */
    private $transferNumbers = null;

    /**
     * Getter for departmentKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     */
    public function getDepartmentKey()
    {
        return $this->departmentKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentKey;
    }

    /**
     * Setter for departmentKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $departmentKey
     * @return $this
     */
    public function setDepartmentKey(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $departmentKey)
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

    /**
     * Getter for transferNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify
     */
    public function getTransferNumbers()
    {
        return $this->transferNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferNumbers;
    }

    /**
     * Setter for transferNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify $transferNumbers
     * @return $this
     */
    public function setTransferNumbers(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify $transferNumbers)
    {
        $this->transferNumbers = $transferNumbers;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransferNumbers()
    {
        $this->transferNumbers = null;
        return $this;
    }


}

