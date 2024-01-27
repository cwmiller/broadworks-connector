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
 * @Groups [{"id":"de7795e1833d459a7eb89116d772fd78:77","type":"sequence"}]
 */
class UserCommPilotExpressModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group de7795e1833d459a7eb89116d772fd78:77
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName profile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressProfile
     * @Nillable
     * @Optional
     * @Group de7795e1833d459a7eb89116d772fd78:77
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressProfile|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $profile = null;

    /**
     * @ElementName availableInOffice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOfficeModify
     * @Optional
     * @Group de7795e1833d459a7eb89116d772fd78:77
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOfficeModify|null
     */
    protected $availableInOffice = null;

    /**
     * @ElementName availableOutOfOffice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOfficeModify
     * @Optional
     * @Group de7795e1833d459a7eb89116d772fd78:77
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOfficeModify|null
     */
    protected $availableOutOfOffice = null;

    /**
     * @ElementName busy
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusyModify
     * @Optional
     * @Group de7795e1833d459a7eb89116d772fd78:77
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusyModify|null
     */
    protected $busy = null;

    /**
     * @ElementName unavailable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailableModify
     * @Optional
     * @Group de7795e1833d459a7eb89116d772fd78:77
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailableModify|null
     */
    protected $unavailable = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for profile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressProfile|null
     */
    public function getProfile()
    {
        return $this->profile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profile;
    }

    /**
     * Setter for profile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressProfile|null $profile
     * @return $this
     */
    public function setProfile(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressProfile $profile = null)
    {
        if ($profile === null) {
            $this->profile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->profile = $profile;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOfficeModify
     */
    public function getAvailableInOffice()
    {
        return $this->availableInOffice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableInOffice;
    }

    /**
     * Setter for availableInOffice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOfficeModify $availableInOffice
     * @return $this
     */
    public function setAvailableInOffice(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableInOfficeModify $availableInOffice)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOfficeModify
     */
    public function getAvailableOutOfOffice()
    {
        return $this->availableOutOfOffice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->availableOutOfOffice;
    }

    /**
     * Setter for availableOutOfOffice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOfficeModify $availableOutOfOffice
     * @return $this
     */
    public function setAvailableOutOfOffice(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressAvailableOutOfOfficeModify $availableOutOfOffice)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusyModify
     */
    public function getBusy()
    {
        return $this->busy instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busy;
    }

    /**
     * Setter for busy
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusyModify $busy
     * @return $this
     */
    public function setBusy(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressBusyModify $busy)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailableModify
     */
    public function getUnavailable()
    {
        return $this->unavailable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->unavailable;
    }

    /**
     * Setter for unavailable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailableModify $unavailable
     * @return $this
     */
    public function setUnavailable(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressUnavailableModify $unavailable)
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

