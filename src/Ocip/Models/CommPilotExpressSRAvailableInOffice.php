<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRAvailableInOffice
 *
 * CommPilot Express SR Available In Office Settings used in the context of a get.
 */
class CommPilotExpressSRAvailableInOffice
{

    /**
     * @ElementName busySetting
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection|null
     */
    private $busySetting = null;

    /**
     * @ElementName noAnswerSetting
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswer|null
     */
    private $noAnswerSetting = null;

    /**
     * @ElementName incomingCallNotify
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify|null
     */
    private $incomingCallNotify = null;

    /**
     * Getter for busySetting
     *
     * @ElementName busySetting
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection|null
     */
    public function getBusySetting()
    {
        return $this->busySetting;
    }

    /**
     * Setter for busySetting
     *
     * @ElementName busySetting
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection|null $busySetting
     * @return $this
     */
    public function setBusySetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirection $busySetting)
    {
        $this->busySetting = $busySetting;
        return $this;
    }

    /**
     * Getter for noAnswerSetting
     *
     * @ElementName noAnswerSetting
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswer|null
     */
    public function getNoAnswerSetting()
    {
        return $this->noAnswerSetting;
    }

    /**
     * Setter for noAnswerSetting
     *
     * @ElementName noAnswerSetting
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswer|null $noAnswerSetting
     * @return $this
     */
    public function setNoAnswerSetting(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRNoAnswer $noAnswerSetting)
    {
        $this->noAnswerSetting = $noAnswerSetting;
        return $this;
    }

    /**
     * Getter for incomingCallNotify
     *
     * @ElementName incomingCallNotify
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify|null
     */
    public function getIncomingCallNotify()
    {
        return $this->incomingCallNotify;
    }

    /**
     * Setter for incomingCallNotify
     *
     * @ElementName incomingCallNotify
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify|null $incomingCallNotify
     * @return $this
     */
    public function setIncomingCallNotify(\CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSREmailNotify $incomingCallNotify)
    {
        $this->incomingCallNotify = $incomingCallNotify;
        return $this;
    }


}

