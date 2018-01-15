<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommPilotExpressSRModifyRequest
 *
 * Modify the user's commPilot express SR service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCommPilotExpressSRModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName profile
     * @var string|null
     */
    private $profile = null;

    /**
     * @ElementName availableInOffice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableInOfficeModify|null
     */
    private $availableInOffice = null;

    /**
     * @ElementName availableOutOfOffice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableOutOfOfficeModify|null
     */
    private $availableOutOfOffice = null;

    /**
     * @ElementName busy
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRBusyModify|null
     */
    private $busy = null;

    /**
     * @ElementName unavailable
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRUnavailableModify|null
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
     * @return string|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Setter for profile
     *
     * @ElementName profile
     * @param string|null $profile
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableInOfficeModify|null
     */
    public function getAvailableInOffice()
    {
        return $this->availableInOffice;
    }

    /**
     * Setter for availableInOffice
     *
     * @ElementName availableInOffice
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableInOfficeModify|null $availableInOffice
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableOutOfOfficeModify|null
     */
    public function getAvailableOutOfOffice()
    {
        return $this->availableOutOfOffice;
    }

    /**
     * Setter for availableOutOfOffice
     *
     * @ElementName availableOutOfOffice
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableOutOfOfficeModify|null $availableOutOfOffice
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRBusyModify|null
     */
    public function getBusy()
    {
        return $this->busy;
    }

    /**
     * Setter for busy
     *
     * @ElementName busy
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRBusyModify|null $busy
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRUnavailableModify|null
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }

    /**
     * Setter for unavailable
     *
     * @ElementName unavailable
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRUnavailableModify|null $unavailable
     * @return $this
     */
    public function setUnavailable($unavailable)
    {
        $this->unavailable = $unavailable;
        return $this;
    }


}

