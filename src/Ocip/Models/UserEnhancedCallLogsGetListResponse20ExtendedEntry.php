<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse20ExtendedEntry
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:43360","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListResponse20ExtendedEntry
{
    /**
     * @ElementName extendedCallLog
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry20
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:43360
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry20[]
     */
    protected $extendedCallLog = [
        
    ];

    /**
     * Getter for extendedCallLog
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry20[]
     */
    public function getExtendedCallLog()
    {
        return $this->extendedCallLog instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedCallLog;
    }

    /**
     * Setter for extendedCallLog
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry20[] $extendedCallLog
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry20 $extendedCallLog
     * @return $this
     */
    public function addExtendedCallLog($extendedCallLog)
    {
        $this->extendedCallLog[] = $extendedCallLog;
        return $this;
    }
}

