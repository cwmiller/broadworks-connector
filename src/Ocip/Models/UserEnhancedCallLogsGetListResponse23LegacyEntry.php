<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse23LegacyEntry
 *
 * @Groups [{"id":"1b5ee40628a3f2b1bcab94a53dec91e7:366","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListResponse23LegacyEntry
{
    /**
     * @ElementName callLog
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry
     * @Array
     * @Optional
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:366
     * @var \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry[]
     */
    protected $callLog = [
        
    ];

    /**
     * Getter for callLog
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry[]
     */
    public function getCallLog()
    {
        return $this->callLog instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callLog;
    }

    /**
     * Setter for callLog
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry[] $callLog
     * @return $this
     */
    public function setCallLog(array $callLog)
    {
        $this->callLog = $callLog;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallLog()
    {
        $this->callLog = null;
        return $this;
    }

    /**
     * Adder for callLog
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry $callLog
     * @return $this
     */
    public function addCallLog($callLog)
    {
        $this->callLog[] = $callLog;
        return $this;
    }
}

