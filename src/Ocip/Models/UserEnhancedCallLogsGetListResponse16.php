<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse16
 *
 * Response to UserEnhancedCallLogsGetListRequest16.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was
 * specified in the UserEnhancedCallLogsGetListRequest16, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was
 * specified in the request.
 *         
 *         Replaced by UserEnhancedCallLogsGetListResponse17sp4
 *
 * @see UserEnhancedCallLogsGetListRequest16
 * @see UserEnhancedCallLogsGetListRequest16
 * @see UserEnhancedCallLogsGetListResponse17sp4
 */
class UserEnhancedCallLogsGetListResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName callLog
     * @var \CWM\BroadWorksConnector\Ocip\Models\MixedCallLogsEntry[]
     */
    private $callLog = array(
        
    );

    /**
     * Getter for totalNumberOfRows
     *
     * @ElementName totalNumberOfRows
     * @return int|null
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows;
    }

    /**
     * Setter for totalNumberOfRows
     *
     * @ElementName totalNumberOfRows
     * @param int|null $totalNumberOfRows
     * @return $this
     */
    public function setTotalNumberOfRows($totalNumberOfRows)
    {
        $this->totalNumberOfRows = $totalNumberOfRows;
        return $this;
    }

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

