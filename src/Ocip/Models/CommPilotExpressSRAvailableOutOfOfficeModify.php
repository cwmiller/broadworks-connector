<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRAvailableOutOfOfficeModify
 *
 * CommPilot Express SR Available Out Of Office Configuration used in the context
 * of a modify.
 */
class CommPilotExpressSRAvailableOutOfOfficeModify
{

    /**
     * @ElementName remotePhoneNumber
     * @var string|null
     */
    private $remotePhoneNumber = null;

    /**
     * @ElementName noAnswerSetting
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswerModify|null
     */
    private $noAnswerSetting = null;

    /**
     * @ElementName incomingCallNotify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify|null
     */
    private $incomingCallNotify = null;

    /**
     * Getter for remotePhoneNumber
     *
     * @ElementName remotePhoneNumber
     * @return string|null
     */
    public function getRemotePhoneNumber()
    {
        return $this->remotePhoneNumber;
    }

    /**
     * Setter for remotePhoneNumber
     *
     * @ElementName remotePhoneNumber
     * @param string|null $remotePhoneNumber
     * @return $this
     */
    public function setRemotePhoneNumber($remotePhoneNumber)
    {
        $this->remotePhoneNumber = $remotePhoneNumber;
        return $this;
    }

    /**
     * Getter for noAnswerSetting
     *
     * @ElementName noAnswerSetting
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswerModify|null
     */
    public function getNoAnswerSetting()
    {
        return $this->noAnswerSetting;
    }

    /**
     * Setter for noAnswerSetting
     *
     * @ElementName noAnswerSetting
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswerModify|null $noAnswerSetting
     * @return $this
     */
    public function setNoAnswerSetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswerModify $noAnswerSetting)
    {
        $this->noAnswerSetting = $noAnswerSetting;
        return $this;
    }

    /**
     * Getter for incomingCallNotify
     *
     * @ElementName incomingCallNotify
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify|null
     */
    public function getIncomingCallNotify()
    {
        return $this->incomingCallNotify;
    }

    /**
     * Setter for incomingCallNotify
     *
     * @ElementName incomingCallNotify
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify|null $incomingCallNotify
     * @return $this
     */
    public function setIncomingCallNotify(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify $incomingCallNotify)
    {
        $this->incomingCallNotify = $incomingCallNotify;
        return $this;
    }


}

