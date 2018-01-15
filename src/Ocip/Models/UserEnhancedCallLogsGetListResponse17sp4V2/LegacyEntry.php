<?php

namespace CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4V2;

/**
 * LegacyEntry
 */
class LegacyEntry
{

    /**
     * @ElementName callLog
     * @var \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry[]
     */
    private $callLog = array(
        
    );

    /**
     * Getter for callLog
     *
     * @ElementName callLog
     * @return \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry[]
     */
    public function getCallLog()
    {
        return $this->callLog;
    }

    /**
     * Setter for callLog
     *
     * @ElementName callLog
     * @param \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry[] $callLog
     * @return $this
     */
    public function setCallLog($callLog)
    {
        $this->callLog = $callLog;
        return $this;
    }

    /**
     * Adder for callLog
     *
     * @ElementName callLog
     * @param \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry $callLog
     * @return $this
     */
    public function addCallLog($callLog)
    {
        $this->callLog []= $callLog;
        return $this;
    }


}

