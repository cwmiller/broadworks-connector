<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRRedirectionWithRingList
 *
 * CommPilot Express SR Forward Numbers with number of times to ring.
 */
class CommPilotExpressSRRedirectionWithRingList
{

    /**
     * @ElementName numberEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRing[]
     */
    private $numberEntry = array(
        
    );

    /**
     * Getter for numberEntry
     *
     * @ElementName numberEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRing[]
     */
    public function getNumberEntry()
    {
        return $this->numberEntry;
    }

    /**
     * Setter for numberEntry
     *
     * @ElementName numberEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRing[] $numberEntry
     * @return $this
     */
    public function setNumberEntry($numberEntry)
    {
        $this->numberEntry = $numberEntry;
        return $this;
    }

    /**
     * Adder for numberEntry
     *
     * @ElementName numberEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRing $numberEntry
     * @return $this
     */
    public function addNumberEntry($numberEntry)
    {
        $this->numberEntry []= $numberEntry;
        return $this;
    }


}

