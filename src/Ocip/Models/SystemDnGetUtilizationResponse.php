<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetUtilizationResponse
 *
 * Response to SystemDnGetUtilizationRequest.
 *         Replaced By: SystemDnGetUtilizationResponse14sp3
 *
 * @see SystemDnGetUtilizationRequest
 * @see SystemDnGetUtilizationResponse14sp3
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:4945","type":"sequence"}]
 */
class SystemDnGetUtilizationResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4945
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4945
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName userId
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4945
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName userType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserType
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4945
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserType|null
     */
    private $userType = null;

    /**
     * @ElementName isGroupCallingLineId
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:4945
     * @var bool|null
     */
    private $isGroupCallingLineId = null;

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
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for userType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserType
     */
    public function getUserType()
    {
        return $this->userType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userType;
    }

    /**
     * Setter for userType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserType $userType
     * @return $this
     */
    public function setUserType(\CWM\BroadWorksConnector\Ocip\Models\UserType $userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserType()
    {
        $this->userType = null;
        return $this;
    }

    /**
     * Getter for isGroupCallingLineId
     *
     * @return bool
     */
    public function getIsGroupCallingLineId()
    {
        return $this->isGroupCallingLineId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isGroupCallingLineId;
    }

    /**
     * Setter for isGroupCallingLineId
     *
     * @param bool $isGroupCallingLineId
     * @return $this
     */
    public function setIsGroupCallingLineId($isGroupCallingLineId)
    {
        $this->isGroupCallingLineId = $isGroupCallingLineId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsGroupCallingLineId()
    {
        $this->isGroupCallingLineId = null;
        return $this;
    }


}

