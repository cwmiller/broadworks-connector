<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse22ExtendedEntry
 *
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:17568","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListResponse22ExtendedEntry
{
    /**
     * @ElementName extendedCallLog
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry22
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:17568
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry22[]
     */
    protected $extendedCallLog = [
        
    ];

    /**
     * Getter for extendedCallLog
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry22[]
     */
    public function getExtendedCallLog()
    {
        return $this->extendedCallLog instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedCallLog;
    }

    /**
     * Setter for extendedCallLog
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry22[] $extendedCallLog
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry22 $extendedCallLog
     * @return $this
     */
    public function addExtendedCallLog($extendedCallLog)
    {
        $this->extendedCallLog[] = $extendedCallLog;
        return $this;
    }
}

