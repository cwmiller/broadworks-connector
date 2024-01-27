<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ShInterfaceUserListEntry21sp1
 *
 * ShInterface User List Entry.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:5055","type":"sequence"}]
 */
class ShInterfaceUserListEntry21sp1
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5055
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName userType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserType
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5055
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserType|null
     */
    protected $userType = null;

    /**
     * @ElementName publicUserIdentity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5055
     * @var \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity|null
     */
    protected $publicUserIdentity = null;

    /**
     * @ElementName endpointType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5055
     * @var \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1|null
     */
    protected $endpointType = null;

    /**
     * @ElementName SCSCFName
     * @Type string
     * @Optional
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5055
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $SCSCFName = null;

    /**
     * @ElementName IMSUserState
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IMSUserState
     * @Group 6337d0cfba4de1c83587203c5b0bae54:5055
     * @var \CWM\BroadWorksConnector\Ocip\Models\IMSUserState|null
     */
    protected $IMSUserState = null;

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
     * Getter for publicUserIdentity
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->publicUserIdentity;
    }

    /**
     * Setter for publicUserIdentity
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity $publicUserIdentity
     * @return $this
     */
    public function setPublicUserIdentity(\CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity $publicUserIdentity)
    {
        $this->publicUserIdentity = $publicUserIdentity;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPublicUserIdentity()
    {
        $this->publicUserIdentity = null;
        return $this;
    }

    /**
     * Getter for endpointType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1
     */
    public function getEndpointType()
    {
        return $this->endpointType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointType;
    }

    /**
     * Setter for endpointType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1 $endpointType
     * @return $this
     */
    public function setEndpointType(\CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1 $endpointType)
    {
        $this->endpointType = $endpointType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEndpointType()
    {
        $this->endpointType = null;
        return $this;
    }

    /**
     * Getter for SCSCFName
     *
     * @return string
     */
    public function getSCSCFName()
    {
        return $this->SCSCFName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SCSCFName;
    }

    /**
     * Setter for SCSCFName
     *
     * @param string $SCSCFName
     * @return $this
     */
    public function setSCSCFName($SCSCFName)
    {
        $this->SCSCFName = $SCSCFName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSCSCFName()
    {
        $this->SCSCFName = null;
        return $this;
    }

    /**
     * Getter for IMSUserState
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\IMSUserState
     */
    public function getIMSUserState()
    {
        return $this->IMSUserState instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->IMSUserState;
    }

    /**
     * Setter for IMSUserState
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\IMSUserState $IMSUserState
     * @return $this
     */
    public function setIMSUserState(\CWM\BroadWorksConnector\Ocip\Models\IMSUserState $IMSUserState)
    {
        $this->IMSUserState = $IMSUserState;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIMSUserState()
    {
        $this->IMSUserState = null;
        return $this;
    }
}

