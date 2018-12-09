<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRAvailableInOffice
 *
 * CommPilot Express SR Available In Office Settings used in the context of a get.
 *
 * @Groups [{"id":"9035ce6c9d1f5c483ddb27dc6c140d91:34","type":"sequence"}]
 */
class CommPilotExpressSRAvailableInOffice
{

    /**
     * @ElementName busySetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection
     * @Group 9035ce6c9d1f5c483ddb27dc6c140d91:34
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection|null
     */
    private $busySetting = null;

    /**
     * @ElementName noAnswerSetting
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswer
     * @Group 9035ce6c9d1f5c483ddb27dc6c140d91:34
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswer|null
     */
    private $noAnswerSetting = null;

    /**
     * @ElementName incomingCallNotify
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify
     * @Group 9035ce6c9d1f5c483ddb27dc6c140d91:34
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify|null
     */
    private $incomingCallNotify = null;

    /**
     * Getter for busySetting
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection
     */
    public function getBusySetting()
    {
        return $this->busySetting instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->busySetting;
    }

    /**
     * Setter for busySetting
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection $busySetting
     * @return $this
     */
    public function setBusySetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection $busySetting)
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

