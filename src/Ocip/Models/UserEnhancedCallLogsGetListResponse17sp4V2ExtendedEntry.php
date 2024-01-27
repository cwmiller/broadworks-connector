<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse17sp4V2ExtendedEntry
 *
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:43320","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListResponse17sp4V2ExtendedEntry
{
    /**
     * @ElementName extendedCallLog
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry17sp4
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:43320
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry17sp4[]
     */
    protected $extendedCallLog = [
        
    ];

    /**
     * Getter for extendedCallLog
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry17sp4[]
     */
    public function getExtendedCallLog()
    {
        return $this->extendedCallLog instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedCallLog;
    }

    /**
     * Setter for extendedCallLog
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry17sp4[] $extendedCallLog
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry17sp4 $extendedCallLog
     * @return $this
     */
    public function addExtendedCallLog($extendedCallLog)
    {
        $this->extendedCallLog[] = $extendedCallLog;
        return $this;
    }
}

