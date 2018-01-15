<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommPilotExpressGetResponse
 *
 * Response to the UserCommPilotExpressGetRequest.
 */
class UserCommPilotExpressGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profile
     * @var string|null
     */
    private $profile = null;

    /**
     * @ElementName availableInOffice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOffice|null
     */
    private $availableInOffice = null;

    /**
     * @ElementName availableOutOfOffice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOffice|null
     */
    private $availableOutOfOffice = null;

    /**
     * @ElementName busy
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusy|null
     */
    private $busy = null;

    /**
     * @ElementName unavailable
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailable|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOffice|null
     */
    public function getAvailableInOffice()
    {
        return $this->availableInOffice;
    }

    /**
     * Setter for availableInOffice
     *
     * @ElementName availableInOffice
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOffice|null $availableInOffice
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOffice|null
     */
    public function getAvailableOutOfOffice()
    {
        return $this->availableOutOfOffice;
    }

    /**
     * Setter for availableOutOfOffice
     *
     * @ElementName availableOutOfOffice
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOffice|null $availableOutOfOffice
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusy|null
     */
    public function getBusy()
    {
        return $this->busy;
    }

    /**
     * Setter for busy
     *
     * @ElementName busy
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusy|null $busy
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailable|null
     */
    public function getUnavailable()
    {
        return $this->unavailable;
    }

    /**
     * Setter for unavailable
     *
     * @ElementName unavailable
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailable|null $unavailable
     * @return $this
     */
    public function setUnavailable($unavailable)
    {
        $this->unavailable = $unavailable;
        return $this;
    }


}

