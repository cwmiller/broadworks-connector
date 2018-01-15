<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupOutgoingCallingPlanTransferNumbersModifyListRequest
 *
 * Modify the list of transfer numbers for a group default and it's departments.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOutgoingCallingPlanTransferNumbersModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName groupNumbers
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify|null
     */
    private $groupNumbers = null;

    /**
     * @ElementName departmentNumbers
     * @var \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbersModify[]
     */
    private $departmentNumbers = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for groupNumbers
     *
     * @ElementName groupNumbers
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify|null
     */
    public function getGroupNumbers()
    {
        return $this->groupNumbers;
    }

    /**
     * Setter for groupNumbers
     *
     * @ElementName groupNumbers
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanTransferNumbersModify|null $groupNumbers
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbersModify[]
     */
    public function getDepartmentNumbers()
    {
        return $this->departmentNumbers;
    }

    /**
     * Setter for departmentNumbers
     *
     * @ElementName departmentNumbers
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbersModify[] $departmentNumbers
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\OutgoingCallingPlanDepartmentTransferNumbersModify $departmentNumbers
     * @return $this
     */
    public function addDepartmentNumbers($departmentNumbers)
    {
        $this->departmentNumbers []= $departmentNumbers;
        return $this;
    }


}

