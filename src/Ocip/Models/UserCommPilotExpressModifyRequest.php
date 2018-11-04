<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommPilotExpressModifyRequest
 *
 * Modify the user's commPilot express service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserCommPilotExpressModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName profile
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $profile = null;

    /**
     * @ElementName availableInOffice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOfficeModify|null
     */
    private $availableInOffice = null;

    /**
     * @ElementName availableOutOfOffice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOfficeModify|null
     */
    private $availableOutOfOffice = null;

    /**
     * @ElementName busy
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusyModify|null
     */
    private $busy = null;

    /**
     * @ElementName unavailable
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailableModify|null
     */
    private $unavailable = null;

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
     * Getter for profile
     *
     * @ElementName profile
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Setter for profile
     *
     * @ElementName profile
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Getter for availableInOffice
     *
     * @ElementName availableInOffice
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOfficeModify|null
     */
    public function getAvailableInOffice()
    {
        return $this->availableInOffice;
    }

    /**
     * Setter for availableInOffice
     *
     * @ElementName availableInOffice
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOfficeModify|null $availableInOffice
     * @return $this
     */
    public function setAvailableInOffice($availableInOffice)
    {
        $this->availableInOffice = $availableInOffice;
        return $this;
    }

    /**
     * Getter for availableOutOfOffice
     *
     * @ElementName availableOutOfOffice
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOfficeModify|null
     */
    public function getAvailableOutOfOffice()
    {
        return $this->availableOutOfOffice;
    }

    /**
     * Setter for availableOutOfOffice
     *
     * @ElementName availableOutOfOffice
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOfficeModify|null $availableOutOfOffice
     * @return $this
     */
    public function setAvailableOutOfOffice($availableOutOfOffice)
    {
        $this->availableOutOfOffice = $availableOutOfOffice;
        return $this;
    }

    /**
     * Getter for busy
     *
     * @ElementName busy
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusyModify|null
     */
    public function getBusy()
    {
        return $this->busy;
    }

    /**
     * Setter for busy
     *
     * @ElementName busy
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusyModify|null $busy
     * @return $this
     */
    public function setBusy($busy)
    {
        $this->busy = $busy;
        return $this;
    }

    /**
     * Getter for unavailable
     *
     * @ElementName unavailable
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailableModify|null
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }

    /**
     * Setter for unavailable
     *
     * @ElementName unavailable
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailableModify|null $unavailable
     * @return $this
     */
    public function setUnavailable($unavailable)
    {
        $this->unavailable = $unavailable;
        return $this;
    }


}

