<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRAvailableInOfficeModify
 *
 * CommPilot Express SR Available In Office Settings used in the context of a
 * modify.
 */
class CommPilotExpressSRAvailableInOfficeModify
{

    /**
     * @ElementName busySetting
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify|null
     */
    private $busySetting = null;

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
     * Getter for busySetting
     *
     * @ElementName busySetting
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify|null
     */
    public function getBusySetting()
    {
        return $this->busySetting;
    }

    /**
     * Setter for busySetting
     *
     * @ElementName busySetting
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify|null $busySetting
     * @return $this
     */
    public function setBusySetting($busySetting)
    {
        $this->busySetting = $busySetting;
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

