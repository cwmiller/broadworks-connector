<?php

namespace CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4;

/**
 * ExtendedEntry
 */
class ExtendedEntry
{

    /**
     * @ElementName extendedCallLog
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry[]
     */
    private $extendedCallLog = array(
        
    );

    /**
     * Getter for extendedCallLog
     *
     * @ElementName extendedCallLog
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry[]
     */
    public function getExtendedCallLog()
    {
        return $this->extendedCallLog;
    }

    /**
     * Setter for extendedCallLog
     *
     * @ElementName extendedCallLog
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry[] $extendedCallLog
     * @return $this
     */
    public function setExtendedCallLog($extendedCallLog)
    {
        $this->extendedCallLog = $extendedCallLog;
        return $this;
    }

    /**
     * Adder for extendedCallLog
     *
     * @ElementName extendedCallLog
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry $extendedCallLog
     * @return $this
     */
    public function addExtendedCallLog($extendedCallLog)
    {
        $this->extendedCallLog []= $extendedCallLog;
        return $this;
    }


}

