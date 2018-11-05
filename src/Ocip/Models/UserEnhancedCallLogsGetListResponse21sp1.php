<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse21sp1
 *
 * Response to UserEnhancedCallLogsGetListRequest21sp1.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was
 * specified in the UserEnhancedCallLogsGetListRequest21sp1, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was
 * specified in the request.
 *         A list of MixedCallLogsEntry will be returned if the call logs are
 * stored on CDS
 *         A list of ExtendedMixedCallLogsEntry21sp1 will be returned if the call
 * logs are stored on DBS
 *         The logs are sorted by date/time of the call.
 *         
 *         Replaced by: UserEnhancedCallLogsGetListResponse21Sp1V2 in AS data mode
 *
 * @see UserEnhancedCallLogsGetListRequest21sp1
 * @see UserEnhancedCallLogsGetListRequest21sp1
 * @see UserEnhancedCallLogsGetListResponse21Sp1V2
 */
class UserEnhancedCallLogsGetListResponse21sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName legacyEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1LegacyEntry|null
     */
    private $legacyEntry = null;

    /**
     * @ElementName extendedEntry
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1ExtendedEntry|null
     */
    private $extendedEntry = null;

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
     * Getter for legacyEntry
     *
     * @ElementName legacyEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1LegacyEntry|null
     */
    public function getLegacyEntry()
    {
        return $this->legacyEntry;
    }

    /**
     * Setter for legacyEntry
     *
     * @ElementName legacyEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1LegacyEntry|null $legacyEntry
     * @return $this
     */
    public function setLegacyEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1LegacyEntry $legacyEntry)
    {
        $this->legacyEntry = $legacyEntry;
        return $this;
    }

    /**
     * Getter for extendedEntry
     *
     * @ElementName extendedEntry
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1ExtendedEntry|null
     */
    public function getExtendedEntry()
    {
        return $this->extendedEntry;
    }

    /**
     * Setter for extendedEntry
     *
     * @ElementName extendedEntry
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1ExtendedEntry|null $extendedEntry
     * @return $this
     */
    public function setExtendedEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1ExtendedEntry $extendedEntry)
    {
        $this->extendedEntry = $extendedEntry;
        return $this;
    }


}

