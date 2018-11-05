<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressAvailableInOfficeModify
 *
 * CommPilot Express Available In Office Settings.
 */
class CommPilotExpressAvailableInOfficeModify
{

    /**
     * @ElementName additionalPhoneNumberToRing
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $additionalPhoneNumberToRing = null;

    /**
     * @ElementName busySetting
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null
     */
    private $busySetting = null;

    /**
     * @ElementName noAnswerSetting
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null
     */
    private $noAnswerSetting = null;

    /**
     * Getter for additionalPhoneNumberToRing
     *
     * @ElementName additionalPhoneNumberToRing
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getAdditionalPhoneNumberToRing()
    {
        return $this->additionalPhoneNumberToRing;
    }

    /**
     * Setter for additionalPhoneNumberToRing
     *
     * @ElementName additionalPhoneNumberToRing
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $additionalPhoneNumberToRing
     * @return $this
     */
    public function setAdditionalPhoneNumberToRing($additionalPhoneNumberToRing)
    {
        $this->additionalPhoneNumberToRing = $additionalPhoneNumberToRing;
        return $this;
    }

    /**
     * Getter for busySetting
     *
     * @ElementName busySetting
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null
     */
    public function getBusySetting()
    {
        return $this->busySetting;
    }

    /**
     * Setter for busySetting
     *
     * @ElementName busySetting
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null $busySetting
     * @return $this
     */
    public function setBusySetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify $busySetting)
    {
        $this->busySetting = $busySetting;
        return $this;
    }

    /**
     * Getter for noAnswerSetting
     *
     * @ElementName noAnswerSetting
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null
     */
    public function getNoAnswerSetting()
    {
        return $this->noAnswerSetting;
    }

    /**
     * Setter for noAnswerSetting
     *
     * @ElementName noAnswerSetting
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null $noAnswerSetting
     * @return $this
     */
    public function setNoAnswerSetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify $noAnswerSetting)
    {
        $this->noAnswerSetting = $noAnswerSetting;
        return $this;
    }


}

