<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnhancedCallLogsGetListResponse21
 *
 * Response to EnterpriseEnhancedCallLogsGetListRequest21.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was
 * specified in the EnterpriseEnhancedCallLogsGetListRequest21, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was
 * specified in the request.
 *         A list of ExtendedMixedCallLogsEntry21 will be returned if the call logs
 * are stored on DBS. Otherwise, an error response will be returned.
 *         The result is sorted by date/time of the call.
 */
class EnterpriseEnhancedCallLogsGetListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName extendedCallLog
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21[]
     */
    private $extendedCallLog = array(
        
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
     * Getter for extendedCallLog
     *
     * @ElementName extendedCallLog
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21[]
     */
    public function getExtendedCallLog()
    {
        return $this->extendedCallLog;
    }

    /**
     * Setter for extendedCallLog
     *
     * @ElementName extendedCallLog
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21[] $extendedCallLog
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
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedMixedCallLogsEntry21 $extendedCallLog
     * @return $this
     */
    public function addExtendedCallLog($extendedCallLog)
    {
        $this->extendedCallLog []= $extendedCallLog;
        return $this;
    }


}

