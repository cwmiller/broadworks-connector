<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse22LegacyEntry
 *
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:17560","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListResponse22LegacyEntry
{
    /**
     * @ElementName callLog
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:17560
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

