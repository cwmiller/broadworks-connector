<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CommPilotExpressSRRedirectionWithRingList
 *
 * CommPilot Express SR Forward Numbers with number of times to ring.
 *
 * @Groups [{"id":"0a20cd20692e84aeff051c5071901f47:230","type":"sequence"}]
 */
class CommPilotExpressSRRedirectionWithRingList
{

    /**
     * @ElementName numberEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRing
     * @Array
     * @Optional
     * @Group 0a20cd20692e84aeff051c5071901f47:230
     * @var \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRing[]
     */
    private $numberEntry = array(
        
    );

    /**
     * Getter for numberEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRing[]
     */
    public function getNumberEntry()
    {
        return $this->numberEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberEntry;
    }

    /**
     * Setter for numberEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRing[] $numberEntry
     * @return $this
     */
    public function setNumberEntry(array $numberEntry)
    {
        $this->numberEntry = $numberEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberEntry()
    {
        $this->numberEntry = null;
        return $this;
    }

    /**
     * Adder for numberEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CommPilotExpressSRRedirectionWithRing $numberEntry
     * @return $this
     */
    public function addNumberEntry($numberEntry)
    {
        $this->numberEntry[] = $numberEntry;
        return $this;
    }


}

