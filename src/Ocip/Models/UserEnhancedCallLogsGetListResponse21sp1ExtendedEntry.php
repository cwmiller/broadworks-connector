<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse21sp1ExtendedEntry
 *
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:17488","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListResponse21sp1ExtendedEntry
{
    /**
     * @ElementName extendedCallLog
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21sp1
     * @Array
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:17488
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21sp1[]
     */
    protected $extendedCallLog = [
        
    ];

    /**
     * Getter for extendedCallLog
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21sp1[]
     */
    public function getExtendedCallLog()
    {
        return $this->extendedCallLog instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedCallLog;
    }

    /**
     * Setter for extendedCallLog
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21sp1[] $extendedCallLog
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21sp1 $extendedCallLog
     * @return $this
     */
    public function addExtendedCallLog($extendedCallLog)
    {
        $this->extendedCallLog[] = $extendedCallLog;
        return $this;
    }
}

