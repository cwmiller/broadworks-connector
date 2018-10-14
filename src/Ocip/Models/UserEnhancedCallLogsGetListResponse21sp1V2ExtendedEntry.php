<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse21sp1V2ExtendedEntry
 */
class UserEnhancedCallLogsGetListResponse21sp1V2ExtendedEntry
{

    /**
     * @ElementName extendedCallLog
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21sp1V2[]
     */
    private $extendedCallLog = array(
        
    );

    /**
     * Getter for extendedCallLog
     *
     * @ElementName extendedCallLog
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21sp1V2[]
     */
    public function getExtendedCallLog()
    {
        return $this->extendedCallLog;
    }

    /**
     * Setter for extendedCallLog
     *
     * @ElementName extendedCallLog
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21sp1V2[] $extendedCallLog
     * @return $this
     */
    public function setExtendedCallLog(array $extendedCallLog)
    {
        $this->extendedCallLog = $extendedCallLog;
        return $this;
    }

    /**
     * Adder for extendedCallLog
     *
     * @ElementName extendedCallLog
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21sp1V2 $extendedCallLog
     * @return $this
     */
    public function addExtendedCallLog($extendedCallLog)
    {
        $this->extendedCallLog []= $extendedCallLog;
        return $this;
    }


}

