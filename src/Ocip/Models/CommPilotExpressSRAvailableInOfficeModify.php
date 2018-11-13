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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify|null
     */
    private $busySetting = null;

    /**
     * @ElementName noAnswerSetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswerModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswerModify|null
     */
    private $noAnswerSetting = null;

    /**
     * @ElementName incomingCallNotify
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotifyModify|null
     */
    private $incomingCallNotify = null;

    /**
     * Getter for busySetting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify
     */
    public function getBusySetting()
    {
        return $this->busySetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busySetting;
    }

    /**
     * Setter for busySetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify $busySetting
     * @return $this
     */
    public function setBusySetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionModify $busySetting)
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

