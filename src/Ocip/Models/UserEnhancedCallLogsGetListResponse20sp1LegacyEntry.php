<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse20sp1LegacyEntry
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:43392","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListResponse20sp1LegacyEntry
{
    /**
     * @ElementName callLog
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:43392
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

