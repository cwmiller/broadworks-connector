<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetPublicIdDataResponse
 *
 * Response to the UserShInterfaceGetPublicIdDataRequest.
 *         The response contains the Sh non-transparent data for the specified Public User Identity.
 *         The data also includes a userId, userType, and endpointType.
 *         
 *         Replaced by: UserShInterfaceGetPublicIdDataResponse21sp1.
 *
 * @see UserShInterfaceGetPublicIdDataRequest
 * @see UserShInterfaceGetPublicIdDataResponse21sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:14413","type":"sequence"}]
 */
class UserShInterfaceGetPublicIdDataResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:14413
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName userType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserType
     * @Group de4d76f01f337fe4694212ec9f771753:14413
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserType|null
     */
    protected $userType = null;

    /**
     * @ElementName endpointType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\EndpointType
     * @Group de4d76f01f337fe4694212ec9f771753:14413
     * @var \CWM\BroadWorksConnector\Ocip\Models\EndpointType|null
     */
    protected $endpointType = null;

    /**
     * @ElementName SCSCFName
     * @Type string
     * @Optional
     * @Group de4d76f01f337fe4694212ec9f771753:14413
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $SCSCFName = null;

    /**
     * @ElementName IMSUserState
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IMSUserState
     * @Group de4d76f01f337fe4694212ec9f771753:14413
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
     * Getter for endpointType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\EndpointType
     */
    public function getEndpointType()
    {
        return $this->endpointType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->endpointType;
    }

    /**
     * Setter for endpointType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\EndpointType $endpointType
     * @return $this
     */
    public function setEndpointType(\CWM\BroadWorksConnector\Ocip\Models\EndpointType $endpointType)
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

