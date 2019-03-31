<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserShInterfaceModifyRequest
 *
 * Modifies the Sh Interface non-transparent data associated with a Public User Identity.
 *         The response is a SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"53d18cc797d03d802cbc411ad821f1d4:3941","type":"sequence"}]
 */
class UserShInterfaceModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName publicUserIdentity
     * @Type \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3941
     * @var \CWM\BroadWorksConnector\Ocip\Models\PublicUserIdentity|null
     */
    private $publicUserIdentity = null;

    /**
     * @ElementName SCSCFName
     * @Type string
     * @Nillable
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3941
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $SCSCFName = null;

    /**
     * @ElementName IMSUserState
     * @Type \CWM\BroadWorksConnector\Ocip\Models\IMSUserState
     * @Optional
     * @Group 53d18cc797d03d802cbc411ad821f1d4:3941
     * @var \CWM\BroadWorksConnector\Ocip\Models\IMSUserState|null
     */
    private $IMSUserState = null;

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
     * Getter for SCSCFName
     *
     * @return string|null
     */
    public function getSCSCFName()
    {
        return $this->SCSCFName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->SCSCFName;
    }

    /**
     * Setter for SCSCFName
     *
     * @param string|null $SCSCFName
     * @return $this
     */
    public function setSCSCFName($SCSCFName = null)
    {
        if ($SCSCFName === null) {
            $this->SCSCFName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->SCSCFName = $SCSCFName;
        }
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

