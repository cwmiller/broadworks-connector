<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressAvailableInOffice
 *
 * CommPilot Express Available In Office Settings.
 *
 * @Groups [{"id":"de7795e1833d459a7eb89116d772fd78:103","type":"sequence"}]
 */
class CommPilotExpressAvailableInOffice
{
    /**
     * @ElementName additionalPhoneNumberToRing
     * @Type string
     * @Optional
     * @Group de7795e1833d459a7eb89116d772fd78:103
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $additionalPhoneNumberToRing = null;

    /**
     * @ElementName busySetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection
     * @Group de7795e1833d459a7eb89116d772fd78:103
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection|null
     */
    protected $busySetting = null;

    /**
     * @ElementName noAnswerSetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection
     * @Group de7795e1833d459a7eb89116d772fd78:103
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection|null
     */
    protected $noAnswerSetting = null;

    /**
     * Getter for additionalPhoneNumberToRing
     *
     * @return string
     */
    public function getAdditionalPhoneNumberToRing()
    {
        return $this->additionalPhoneNumberToRing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->additionalPhoneNumberToRing;
    }

    /**
     * Setter for additionalPhoneNumberToRing
     *
     * @param string $additionalPhoneNumberToRing
     * @return $this
     */
    public function setAdditionalPhoneNumberToRing($additionalPhoneNumberToRing)
    {
        $this->additionalPhoneNumberToRing = $additionalPhoneNumberToRing;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAdditionalPhoneNumberToRing()
    {
        $this->additionalPhoneNumberToRing = null;
        return $this;
    }

    /**
     * Getter for busySetting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection
     */
    public function getBusySetting()
    {
        return $this->busySetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busySetting;
    }

    /**
     * Setter for busySetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection $busySetting
     * @return $this
     */
    public function setBusySetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection $busySetting)
    {
        $this->busySetting = $busySetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBusySetting()
    {
        $this->busySetting = null;
        return $this;
    }

    /**
     * Getter for noAnswerSetting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection
     */
    public function getNoAnswerSetting()
    {
        return $this->noAnswerSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerSetting;
    }

    /**
     * Setter for noAnswerSetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection $noAnswerSetting
     * @return $this
     */
    public function setNoAnswerSetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirection $noAnswerSetting)
    {
        $this->noAnswerSetting = $noAnswerSetting;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNoAnswerSetting()
    {
        $this->noAnswerSetting = null;
        return $this;
    }
}

