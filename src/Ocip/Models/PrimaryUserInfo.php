<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * PrimaryUserInfo
 *
 * Primary user information.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3494","type":"sequence"}]
 */
class PrimaryUserInfo
{

    /**
     * @ElementName userId
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3494
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3494
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3494
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName userFirstName
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3494
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $userFirstName = null;

    /**
     * @ElementName userLastName
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3494
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $userLastName = null;

    /**
     * @ElementName userPhoneNumber
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3494
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $userPhoneNumber = null;

    /**
     * @ElementName userExtension
     * @Type string
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3494
     * @MinLength 2
     * @MaxLength 20
     * @var string|null
     */
    protected $userExtension = null;

    /**
     * @ElementName endPointType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1
     * @Optional
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3494
     * @var \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1|null
     */
    protected $endPointType = null;

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
     * Getter for userFirstName
     *
     * @return string
     */
    public function getUserFirstName()
    {
        return $this->userFirstName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userFirstName;
    }

    /**
     * Setter for userFirstName
     *
     * @param string $userFirstName
     * @return $this
     */
    public function setUserFirstName($userFirstName)
    {
        $this->userFirstName = $userFirstName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserFirstName()
    {
        $this->userFirstName = null;
        return $this;
    }

    /**
     * Getter for userLastName
     *
     * @return string
     */
    public function getUserLastName()
    {
        return $this->userLastName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userLastName;
    }

    /**
     * Setter for userLastName
     *
     * @param string $userLastName
     * @return $this
     */
    public function setUserLastName($userLastName)
    {
        $this->userLastName = $userLastName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserLastName()
    {
        $this->userLastName = null;
        return $this;
    }

    /**
     * Getter for userPhoneNumber
     *
     * @return string
     */
    public function getUserPhoneNumber()
    {
        return $this->userPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userPhoneNumber;
    }

    /**
     * Setter for userPhoneNumber
     *
     * @param string $userPhoneNumber
     * @return $this
     */
    public function setUserPhoneNumber($userPhoneNumber)
    {
        $this->userPhoneNumber = $userPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserPhoneNumber()
    {
        $this->userPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for userExtension
     *
     * @return string
     */
    public function getUserExtension()
    {
        return $this->userExtension instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userExtension;
    }

    /**
     * Setter for userExtension
     *
     * @param string $userExtension
     * @return $this
     */
    public function setUserExtension($userExtension)
    {
        $this->userExtension = $userExtension;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserExtension()
    {
        $this->userExtension = null;
        return $this;
    }

    /**
     * Getter for endPointType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1
     */
    public function getEndPointType()
    {
        return $this->endPointType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endPointType;
    }

    /**
     * Setter for endPointType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1 $endPointType
     * @return $this
     */
    public function setEndPointType(\CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1 $endPointType)
    {
        $this->endPointType = $endPointType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndPointType()
    {
        $this->endPointType = null;
        return $this;
    }


}

