<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCommPilotExpressGetResponse
 *
 * Response to the UserCommPilotExpressGetRequest.
 *
 * @see UserCommPilotExpressGetRequest
 * @Groups [{"id":"8c204d784d1904d9eeea996d46de69be:56","type":"sequence"}]
 */
class UserCommPilotExpressGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressProfile
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:56
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressProfile|null
     */
    private $profile = null;

    /**
     * @ElementName availableInOffice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOffice
     * @Group 8c204d784d1904d9eeea996d46de69be:56
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOffice|null
     */
    private $availableInOffice = null;

    /**
     * @ElementName availableOutOfOffice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOffice
     * @Group 8c204d784d1904d9eeea996d46de69be:56
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOffice|null
     */
    private $availableOutOfOffice = null;

    /**
     * @ElementName busy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusy
     * @Group 8c204d784d1904d9eeea996d46de69be:56
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusy|null
     */
    private $busy = null;

    /**
     * @ElementName unavailable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailable
     * @Group 8c204d784d1904d9eeea996d46de69be:56
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailable|null
     */
    private $unavailable = null;

    /**
     * Getter for profile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressProfile
     */
    public function getProfile()
    {
        return $this->profile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profile;
    }

    /**
     * Setter for profile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressProfile $profile
     * @return $this
     */
    public function setProfile(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressProfile $profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfile()
    {
        $this->profile = null;
        return $this;
    }

    /**
     * Getter for availableInOffice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOffice
     */
    public function getAvailableInOffice()
    {
        return $this->availableInOffice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableInOffice;
    }

    /**
     * Setter for availableInOffice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOffice $availableInOffice
     * @return $this
     */
    public function setAvailableInOffice(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOffice $availableInOffice)
    {
        $this->availableInOffice = $availableInOffice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailableInOffice()
    {
        $this->availableInOffice = null;
        return $this;
    }

    /**
     * Getter for availableOutOfOffice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOffice
     */
    public function getAvailableOutOfOffice()
    {
        return $this->availableOutOfOffice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableOutOfOffice;
    }

    /**
     * Setter for availableOutOfOffice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOffice $availableOutOfOffice
     * @return $this
     */
    public function setAvailableOutOfOffice(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOffice $availableOutOfOffice)
    {
        $this->availableOutOfOffice = $availableOutOfOffice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAvailableOutOfOffice()
    {
        $this->availableOutOfOffice = null;
        return $this;
    }

    /**
     * Getter for busy
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusy
     */
    public function getBusy()
    {
        return $this->busy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busy;
    }

    /**
     * Setter for busy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusy $busy
     * @return $this
     */
    public function setBusy(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusy $busy)
    {
        $this->busy = $busy;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusy()
    {
        $this->busy = null;
        return $this;
    }

    /**
     * Getter for unavailable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailable
     */
    public function getUnavailable()
    {
        return $this->unavailable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unavailable;
    }

    /**
     * Setter for unavailable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailable $unavailable
     * @return $this
     */
    public function setUnavailable(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailable $unavailable)
    {
        $this->unavailable = $unavailable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUnavailable()
    {
        $this->unavailable = null;
        return $this;
    }


}

