<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressAvailableInOfficeModify
 *
 * CommPilot Express Available In Office Settings.
 *
 * @Groups [{"id":"8c204d784d1904d9eeea996d46de69be:116","type":"sequence"}]
 */
class CommPilotExpressAvailableInOfficeModify
{

    /**
     * @ElementName additionalPhoneNumberToRing
     * @Type string
     * @Nillable
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:116
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $additionalPhoneNumberToRing = null;

    /**
     * @ElementName busySetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:116
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null
     */
    private $busySetting = null;

    /**
     * @ElementName noAnswerSetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify
     * @Optional
     * @Group 8c204d784d1904d9eeea996d46de69be:116
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify|null
     */
    private $noAnswerSetting = null;

    /**
     * Getter for additionalPhoneNumberToRing
     *
     * @return string|null
     */
    public function getAdditionalPhoneNumberToRing()
    {
        return $this->additionalPhoneNumberToRing instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->additionalPhoneNumberToRing;
    }

    /**
     * Setter for additionalPhoneNumberToRing
     *
     * @param string|null $additionalPhoneNumberToRing
     * @return $this
     */
    public function setAdditionalPhoneNumberToRing($additionalPhoneNumberToRing = null)
    {
        if ($additionalPhoneNumberToRing === null) {
            $this->additionalPhoneNumberToRing = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->additionalPhoneNumberToRing = $additionalPhoneNumberToRing;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify
     */
    public function getBusySetting()
    {
        return $this->busySetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busySetting;
    }

    /**
     * Setter for busySetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify $busySetting
     * @return $this
     */
    public function setBusySetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify $busySetting)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify
     */
    public function getNoAnswerSetting()
    {
        return $this->noAnswerSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerSetting;
    }

    /**
     * Setter for noAnswerSetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify $noAnswerSetting
     * @return $this
     */
    public function setNoAnswerSetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressRedirectionModify $noAnswerSetting)
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

