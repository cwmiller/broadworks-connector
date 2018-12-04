<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRAvailableOutOfOfficeModify
 *
 * CommPilot Express SR Available Out Of Office Configuration used in the context of a modify.
 *
 * @Groups [{"id":"0a20cd20692e84aeff051c5071901f47:73","type":"sequence"}]
 */
class CommPilotExpressSRAvailableOutOfOfficeModify
{

    /**
     * @ElementName remotePhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 0a20cd20692e84aeff051c5071901f47:73
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $remotePhoneNumber = null;

    /**
     * @ElementName noAnswerSetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswerModify
     * @Optional
     * @Group 0a20cd20692e84aeff051c5071901f47:73
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswerModify|null
     */
    private $noAnswerSetting = null;

    /**
     * @ElementName incomingCallNotify
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify
     * @Optional
     * @Group 0a20cd20692e84aeff051c5071901f47:73
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify|null
     */
    private $incomingCallNotify = null;

    /**
     * Getter for remotePhoneNumber
     *
     * @return string|null
     */
    public function getRemotePhoneNumber()
    {
        return $this->remotePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->remotePhoneNumber;
    }

    /**
     * Setter for remotePhoneNumber
     *
     * @param string|null $remotePhoneNumber
     * @return $this
     */
    public function setRemotePhoneNumber($remotePhoneNumber)
    {
        if ($remotePhoneNumber === null) {
            $this->remotePhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->remotePhoneNumber = $remotePhoneNumber;
        }
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswerModify
     */
    public function getNoAnswerSetting()
    {
        return $this->noAnswerSetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->noAnswerSetting;
    }

    /**
     * Setter for noAnswerSetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswerModify $noAnswerSetting
     * @return $this
     */
    public function setNoAnswerSetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswerModify $noAnswerSetting)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify
     */
    public function getIncomingCallNotify()
    {
        return $this->incomingCallNotify instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->incomingCallNotify;
    }

    /**
     * Setter for incomingCallNotify
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify $incomingCallNotify
     * @return $this
     */
    public function setIncomingCallNotify(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify $incomingCallNotify)
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

