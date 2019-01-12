<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupDepartmentModifyRequest
 *
 * Modify a department of a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 *         The following elements are only used in AS data mode:
 *            callingLineIdName
 *            caliingLineIdPhoneNumber
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:3224","type":"sequence"}]
 */
class GroupDepartmentModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3224
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3224
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName departmentName
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3224
     * @var string|null
     */
    private $departmentName = null;

    /**
     * @ElementName newDepartmentName
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3224
     * @var string|null
     */
    private $newDepartmentName = null;

    /**
     * @ElementName newParentDepartmentKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3224
     * @var \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $newParentDepartmentKey = null;

    /**
     * @ElementName callingLineIdName
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3224
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callingLineIdName = null;

    /**
     * @ElementName callingLineIdPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:3224
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callingLineIdPhoneNumber = null;

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
     * Getter for newDepartmentName
     *
     * @return string
     */
    public function getNewDepartmentName()
    {
        return $this->newDepartmentName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newDepartmentName;
    }

    /**
     * Setter for newDepartmentName
     *
     * @param string $newDepartmentName
     * @return $this
     */
    public function setNewDepartmentName($newDepartmentName)
    {
        $this->newDepartmentName = $newDepartmentName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewDepartmentName()
    {
        $this->newDepartmentName = null;
        return $this;
    }

    /**
     * Getter for newParentDepartmentKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null
     */
    public function getNewParentDepartmentKey()
    {
        return $this->newParentDepartmentKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newParentDepartmentKey;
    }

    /**
     * Setter for newParentDepartmentKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\DepartmentKey|null $newParentDepartmentKey
     * @return $this
     */
    public function setNewParentDepartmentKey(\CWM\BroadWorksConnector\Ocip\Models\DepartmentKey $newParentDepartmentKey)
    {
        if ($newParentDepartmentKey === null) {
            $this->newParentDepartmentKey = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->newParentDepartmentKey = $newParentDepartmentKey;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewParentDepartmentKey()
    {
        $this->newParentDepartmentKey = null;
        return $this;
    }

    /**
     * Getter for callingLineIdName
     *
     * @return string|null
     */
    public function getCallingLineIdName()
    {
        return $this->callingLineIdName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdName;
    }

    /**
     * Setter for callingLineIdName
     *
     * @param string|null $callingLineIdName
     * @return $this
     */
    public function setCallingLineIdName($callingLineIdName)
    {
        if ($callingLineIdName === null) {
            $this->callingLineIdName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callingLineIdName = $callingLineIdName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdName()
    {
        $this->callingLineIdName = null;
        return $this;
    }

    /**
     * Getter for callingLineIdPhoneNumber
     *
     * @return string|null
     */
    public function getCallingLineIdPhoneNumber()
    {
        return $this->callingLineIdPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callingLineIdPhoneNumber;
    }

    /**
     * Setter for callingLineIdPhoneNumber
     *
     * @param string|null $callingLineIdPhoneNumber
     * @return $this
     */
    public function setCallingLineIdPhoneNumber($callingLineIdPhoneNumber)
    {
        if ($callingLineIdPhoneNumber === null) {
            $this->callingLineIdPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callingLineIdPhoneNumber = $callingLineIdPhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallingLineIdPhoneNumber()
    {
        $this->callingLineIdPhoneNumber = null;
        return $this;
    }


}

