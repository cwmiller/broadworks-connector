<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetUtilizationResponse14sp3
 *
 * Response to SystemDnGetUtilizationRequest14sp3.
 *         The isActivated element is only included when the DN is
 *   assigned to a user.
 *
 * @see SystemDnGetUtilizationRequest14sp3
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9512","type":"sequence"}]
 */
class SystemDnGetUtilizationResponse14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:9512
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9512
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName userId
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9512
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName userType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserType
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9512
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserType|null
     */
    protected $userType = null;

    /**
     * @ElementName isGroupCallingLineId
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:9512
     * @var bool|null
     */
    protected $isGroupCallingLineId = null;

    /**
     * @ElementName isActivated
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9512
     * @var bool|null
     */
    protected $isActivated = null;

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

    /**
     * Getter for isActivated
     *
     * @return bool
     */
    public function getIsActivated()
    {
        return $this->isActivated instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActivated;
    }

    /**
     * Setter for isActivated
     *
     * @param bool $isActivated
     * @return $this
     */
    public function setIsActivated($isActivated)
    {
        $this->isActivated = $isActivated;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActivated()
    {
        $this->isActivated = null;
        return $this;
    }
}

