<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetPublicIdDataResponse
 *
 * Response to the UserShInterfaceGetPublicIdDataRequest.
 *         The response contains the Sh non-transparent data for the specified
 * Public User Identity.
 *         The data also includes a userId, userType, and endpointType.
 */
class UserShInterfaceGetPublicIdDataResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName userType
     * @var string|null
     */
    private $userType = null;

    /**
     * @ElementName endpointType
     * @var string|null
     */
    private $endpointType = null;

    /**
     * @ElementName SCSCFName
     * @var string|null
     */
    private $SCSCFName = null;

    /**
     * @ElementName IMSUserState
     * @var string|null
     */
    private $IMSUserState = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for userType
     *
     * @ElementName userType
     * @return string|null
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Setter for userType
     *
     * @ElementName userType
     * @param string|null $userType
     * @return $this
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * Getter for endpointType
     *
     * @ElementName endpointType
     * @return string|null
     */
    public function getEndpointType()
    {
        return $this->endpointType;
    }

    /**
     * Setter for endpointType
     *
     * @ElementName endpointType
     * @param string|null $endpointType
     * @return $this
     */
    public function setEndpointType($endpointType)
    {
        $this->endpointType = $endpointType;
        return $this;
    }

    /**
     * Getter for SCSCFName
     *
     * @ElementName SCSCFName
     * @return string|null
     */
    public function getSCSCFName()
    {
        return $this->SCSCFName;
    }

    /**
     * Setter for SCSCFName
     *
     * @ElementName SCSCFName
     * @param string|null $SCSCFName
     * @return $this
     */
    public function setSCSCFName($SCSCFName)
    {
        $this->SCSCFName = $SCSCFName;
        return $this;
    }

    /**
     * Getter for IMSUserState
     *
     * @ElementName IMSUserState
     * @return string|null
     */
    public function getIMSUserState()
    {
        return $this->IMSUserState;
    }

    /**
     * Setter for IMSUserState
     *
     * @ElementName IMSUserState
     * @param string|null $IMSUserState
     * @return $this
     */
    public function setIMSUserState($IMSUserState)
    {
        $this->IMSUserState = $IMSUserState;
        return $this;
    }


}

