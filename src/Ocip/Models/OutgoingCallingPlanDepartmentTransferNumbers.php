<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * OutgoingCallingPlanDepartmentTransferNumbers
 *
 * Outgoing Calling Plan transfer numbers for a department.
 *
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:1835","type":"sequence"}]
 */
class OutgoingCallingPlanDepartmentTransferNumbers
{

    /**
     * @ElementName departmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Abstract \CWM\BroadWorksConnector\Ocip\Models\EnterpriseDepartmentKey,\CWM\BroadWorksConnector\Ocip\Models\GroupDepartmentKey
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1835
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    private $departmentKey = null;

    /**
     * @ElementName departmentName
     * @Type string
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1835
     * @MinLength 1
     * @var string|null
     */
    private $departmentName = null;

    /**
     * @ElementName transferNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1835
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers|null
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
     * Getter for departmentName
     *
     * @return string
     */
    public function getDepartmentName()
    {
        return $this->departmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentName;
    }

    /**
     * Setter for departmentName
     *
     * @param string $departmentName
     * @return $this
     */
    public function setDepartmentName($departmentName)
    {
        $this->departmentName = $departmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDepartmentName()
    {
        $this->departmentName = null;
        return $this;
    }

    /**
     * Getter for transferNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers
     */
    public function getTransferNumbers()
    {
        return $this->transferNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transferNumbers;
    }

    /**
     * Setter for transferNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers $transferNumbers
     * @return $this
     */
    public function setTransferNumbers(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbers $transferNumbers)
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

