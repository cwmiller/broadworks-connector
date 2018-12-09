<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRAvailableOutOfOffice
 *
 * CommPilot Express SR Available Out Of Office Configuration used in the context of a get.
 *
 * @Groups [{"id":"9035ce6c9d1f5c483ddb27dc6c140d91:60","type":"sequence"}]
 */
class CommPilotExpressSRAvailableOutOfOffice
{

    /**
     * @ElementName remotePhoneNumber
     * @Type string
     * @Optional
     * @Group 9035ce6c9d1f5c483ddb27dc6c140d91:60
     * @var string|null
     */
    private $remotePhoneNumber = null;

    /**
     * @ElementName noAnswerSetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswer
     * @Group 9035ce6c9d1f5c483ddb27dc6c140d91:60
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswer|null
     */
    private $noAnswerSetting = null;

    /**
     * @ElementName incomingCallNotify
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify
     * @Group 9035ce6c9d1f5c483ddb27dc6c140d91:60
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify|null
     */
    private $incomingCallNotify = null;

    /**
     * Getter for remotePhoneNumber
     *
     * @return string
     */
    public function getRemotePhoneNumber()
    {
        return $this->remotePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->remotePhoneNumber;
    }

    /**
     * Setter for remotePhoneNumber
     *
     * @param string $remotePhoneNumber
     * @return $this
     */
    public function setRemotePhoneNumber($remotePhoneNumber)
    {
        $this->remotePhoneNumber = $remotePhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemotePhoneNumber()
    {
        $this->remotePhoneNumber = null;
        return $this;
    }

    /**
     * Getter for noAnswerSetting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswer
     */
    public function getNoAnswerSetting()
    {
        return $this->noAnswerSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerSetting;
    }

    /**
     * Setter for noAnswerSetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswer $noAnswerSetting
     * @return $this
     */
    public function setNoAnswerSetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswer $noAnswerSetting)
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

    /**
     * Getter for incomingCallNotify
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify
     */
    public function getIncomingCallNotify()
    {
        return $this->incomingCallNotify instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCallNotify;
    }

    /**
     * Setter for incomingCallNotify
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify $incomingCallNotify
     * @return $this
     */
    public function setIncomingCallNotify(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify $incomingCallNotify)
    {
        $this->incomingCallNotify = $incomingCallNotify;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIncomingCallNotify()
    {
        $this->incomingCallNotify = null;
        return $this;
    }


}

