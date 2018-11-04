<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceModifyRequest
 *
 * Modifies the Sh Interface non-transparent data associated with a Public User
 * Identity.
 *         The response is a SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserShInterfaceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName publicUserIdentity
     * @var \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity|null
     */
    private $publicUserIdentity = null;

    /**
     * @ElementName SCSCFName
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $SCSCFName = null;

    /**
     * @ElementName IMSUserState
     * @var string|null
     */
    private $IMSUserState = null;

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
     * Getter for SCSCFName
     *
     * @ElementName SCSCFName
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSCSCFName()
    {
        return $this->SCSCFName;
    }

    /**
     * Setter for SCSCFName
     *
     * @ElementName SCSCFName
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $SCSCFName
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

