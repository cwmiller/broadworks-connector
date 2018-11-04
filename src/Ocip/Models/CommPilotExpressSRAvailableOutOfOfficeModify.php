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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getRemotePhoneNumber()
    {
        return $this->remotePhoneNumber;
    }

    /**
     * Setter for remotePhoneNumber
     *
     * @ElementName remotePhoneNumber
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $remotePhoneNumber
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
    public function setNoAnswerSetting($noAnswerSetting)
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
    public function setIncomingCallNotify($incomingCallNotify)
    {
        $this->incomingCallNotify = $incomingCallNotify;
        return $this;
    }


}

