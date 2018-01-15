<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommPilotExpressSRGetResponse13mp16
 *
 * Response to the UserCommPilotExpressSRGetRequest13mp16.
 */
class UserCommPilotExpressSRGetResponse13mp16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profile
     * @var string|null
     */
    private $profile = null;

    /**
     * @ElementName availableInOffice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableInOffice|null
     */
    private $availableInOffice = null;

    /**
     * @ElementName availableOutOfOffice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableOutOfOffice|null
     */
    private $availableOutOfOffice = null;

    /**
     * @ElementName busy
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRBusy|null
     */
    private $busy = null;

    /**
     * @ElementName unavailable
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRUnavailable|null
     */
    private $unavailable = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableInOffice|null
     */
    public function getAvailableInOffice()
    {
        return $this->availableInOffice;
    }

    /**
     * Setter for availableInOffice
     *
     * @ElementName availableInOffice
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableInOffice|null $availableInOffice
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableOutOfOffice|null
     */
    public function getAvailableOutOfOffice()
    {
        return $this->availableOutOfOffice;
    }

    /**
     * Setter for availableOutOfOffice
     *
     * @ElementName availableOutOfOffice
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRAvailableOutOfOffice|null $availableOutOfOffice
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRBusy|null
     */
    public function getBusy()
    {
        return $this->busy;
    }

    /**
     * Setter for busy
     *
     * @ElementName busy
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRBusy|null $busy
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRUnavailable|null
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }

    /**
     * Setter for unavailable
     *
     * @ElementName unavailable
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRUnavailable|null $unavailable
     * @return $this
     */
    public function setUnavailable($unavailable)
    {
        $this->unavailable = $unavailable;
        return $this;
    }


}

