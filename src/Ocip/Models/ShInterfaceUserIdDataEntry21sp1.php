<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ShInterfaceUserIdDataEntry21sp1
 *
 * ShInterface User Id Data Entry.
 */
class ShInterfaceUserIdDataEntry21sp1
{

    /**
     * @ElementName userType
     * @var string|null
     */
    private $userType = null;

    /**
     * @ElementName publicUserIdentity
     * @var \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity|null
     */
    private $publicUserIdentity = null;

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
     * Getter for publicUserIdentity
     *
     * @ElementName publicUserIdentity
     * @return \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity|null
     */
    public function getPublicUserIdentity()
    {
        return $this->publicUserIdentity;
    }

    /**
     * Setter for publicUserIdentity
     *
     * @ElementName publicUserIdentity
     * @param \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity|null $publicUserIdentity
     * @return $this
     */
    public function setPublicUserIdentity($publicUserIdentity)
    {
        $this->publicUserIdentity = $publicUserIdentity;
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

