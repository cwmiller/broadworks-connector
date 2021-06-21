<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanTransferNumbersModifyListRequest
 *
 * Modify the list of transfer numbers for a group default and it's departments.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:857","type":"sequence"}]
 */
class GroupOutgoingCallingPlanTransferNumbersModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:857
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:857
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName groupNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:857
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify|null
     */
    private $groupNumbers = null;

    /**
     * @ElementName departmentNumbers
     * @Type \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbersModify
     * @Array
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:857
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbersModify[]
     */
    private $departmentNumbers = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for groupNumbers
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify
     */
    public function getGroupNumbers()
    {
        return $this->groupNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupNumbers;
    }

    /**
     * Setter for groupNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify $groupNumbers
     * @return $this
     */
    public function setGroupNumbers(\CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify $groupNumbers)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbersModify[]
     */
    public function getDepartmentNumbers()
    {
        return $this->departmentNumbers instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->departmentNumbers;
    }

    /**
     * Setter for departmentNumbers
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbersModify[] $departmentNumbers
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbersModify $departmentNumbers
     * @return $this
     */
    public function addDepartmentNumbers($departmentNumbers)
    {
        $this->departmentNumbers[] = $departmentNumbers;
        return $this;
    }


}

