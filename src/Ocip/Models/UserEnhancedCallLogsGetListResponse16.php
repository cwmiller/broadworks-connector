<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse16
 *
 * Response to UserEnhancedCallLogsGetListRequest16.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the UserEnhancedCallLogsGetListRequest16, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 *         
 *         Replaced by UserEnhancedCallLogsGetListResponse17sp4
 *
 * @see UserEnhancedCallLogsGetListRequest16
 * @see UserEnhancedCallLogsGetListRequest16
 * @see UserEnhancedCallLogsGetListResponse17sp4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:43241","type":"sequence"}]
 */
class UserEnhancedCallLogsGetListResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group d8f04177e438f303b41c211e518706bf:43241
     * @var int|null
     */
    protected $totalNumberOfRows = null;

    /**
     * @ElementName callLog
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry
     * @Array
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:43241
     * @var \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry[]
     */
    protected $callLog = [
        
    ];

    /**
     * Getter for totalNumberOfRows
     *
     * @return int
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @param int $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTotalNumberOfRows()
    {
        $this->totalNumberOfRows = null;
        return $this;
    }

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

