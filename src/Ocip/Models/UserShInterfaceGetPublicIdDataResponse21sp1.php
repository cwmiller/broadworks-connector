<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceGetPublicIdDataResponse21sp1
 *
 * Response to the UserShInterfaceGetPublicIdDataRequest21sp1.
 *         The response contains the Sh non-transparent data for the specified
 * Public User Identity.
 *         The data also includes a userId, userType, and endpointType.
 *         The value Mobility in Endpoint Type is only applicable in AS data mode.
 *
 * @see UserShInterfaceGetPublicIdDataRequest21sp1
 */
class UserShInterfaceGetPublicIdDataResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName userType
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserType|null
     */
    private $userType = null;

    /**
     * @ElementName endpointType
     * @var \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1|null
     */
    private $endpointType = null;

    /**
     * @ElementName SCSCFName
     * @var string|null
     */
    private $SCSCFName = null;

    /**
     * @ElementName IMSUserState
     * @var \CWM\BroadWorksConnector\Ocip\Models\IMSUserState|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserType|null
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Setter for userType
     *
     * @ElementName userType
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserType|null $userType
     * @return $this
     */
    public function setUserType(\CWM\BroadWorksConnector\Ocip\Models\UserType $userType)
    {
        $this->userType = $userType;
        return $this;
    }

    /**
     * Getter for endpointType
     *
     * @ElementName endpointType
     * @return \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1|null
     */
    public function getEndpointType()
    {
        return $this->endpointType;
    }

    /**
     * Setter for endpointType
     *
     * @ElementName endpointType
     * @param \CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1|null $endpointType
     * @return $this
     */
    public function setEndpointType(\CWM\BroadWorksConnector\Ocip\Models\EndpointType21sp1 $endpointType)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\IMSUserState|null
     */
    public function getIMSUserState()
    {
        return $this->IMSUserState;
    }

    /**
     * Setter for IMSUserState
     *
     * @ElementName IMSUserState
     * @param \CWM\BroadWorksConnector\Ocip\Models\IMSUserState|null $IMSUserState
     * @return $this
     */
    public function setIMSUserState(\CWM\BroadWorksConnector\Ocip\Models\IMSUserState $IMSUserState)
    {
        $this->IMSUserState = $IMSUserState;
        return $this;
    }


}

