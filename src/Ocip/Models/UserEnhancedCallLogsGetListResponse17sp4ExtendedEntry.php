<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse17sp4ExtendedEntry
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:43280","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListResponse17sp4ExtendedEntry
{
    /**
     * @ElementName extendedCallLog
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:43280
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry[]
     */
    protected $extendedCallLog = [
        
    ];

    /**
     * Getter for extendedCallLog
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry[]
     */
    public function getExtendedCallLog()
    {
        return $this->extendedCallLog instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedCallLog;
    }

    /**
     * Setter for extendedCallLog
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry[] $extendedCallLog
     * @return $this
     */
    public function setExtendedCallLog(array $extendedCallLog)
    {
        $this->extendedCallLog = $extendedCallLog;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedCallLog()
    {
        $this->extendedCallLog = null;
        return $this;
    }

    /**
     * Adder for extendedCallLog
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry $extendedCallLog
     * @return $this
     */
    public function addExtendedCallLog($extendedCallLog)
    {
        $this->extendedCallLog[] = $extendedCallLog;
        return $this;
    }
}

