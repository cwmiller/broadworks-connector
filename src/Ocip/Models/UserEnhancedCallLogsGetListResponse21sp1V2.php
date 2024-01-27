<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse21sp1V2
 *
 * Response to UserEnhancedCallLogsGetListRequest21sp1V2.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the UserEnhancedCallLogsGetListRequest21sp1V2, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 *         A list of MixedCallLogsEntry will be returned if the call logs are stored on CDS
 *         A list of ExtendedMixedCallLogsEntry21sp1V2 will be returned if the call logs are stored on DBS
 *         The logs are sorted by date/time of the call.
 *
 * @see UserEnhancedCallLogsGetListRequest21sp1V2
 * @see UserEnhancedCallLogsGetListRequest21sp1V2
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:17514","type":"sequence","children":[{"id":"240b50f54d060859e5e275082fdf49f9:17516","type":"choice"}]}]
 */
class UserEnhancedCallLogsGetListResponse21sp1V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group 240b50f54d060859e5e275082fdf49f9:17514
     * @var int|null
     */
    protected $totalNumberOfRows = null;

    /**
     * @ElementName legacyEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1V2LegacyEntry
     * @Group 240b50f54d060859e5e275082fdf49f9:17516
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1V2LegacyEntry|null
     */
    protected $legacyEntry = null;

    /**
     * @ElementName extendedEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1V2ExtendedEntry
     * @Group 240b50f54d060859e5e275082fdf49f9:17516
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1V2ExtendedEntry|null
     */
    protected $extendedEntry = null;

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
     * Getter for legacyEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1V2LegacyEntry
     */
    public function getLegacyEntry()
    {
        return $this->legacyEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->legacyEntry;
    }

    /**
     * Setter for legacyEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1V2LegacyEntry $legacyEntry
     * @return $this
     */
    public function setLegacyEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1V2LegacyEntry $legacyEntry)
    {
        $this->legacyEntry = $legacyEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLegacyEntry()
    {
        $this->legacyEntry = null;
        return $this;
    }

    /**
     * Getter for extendedEntry
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1V2ExtendedEntry
     */
    public function getExtendedEntry()
    {
        return $this->extendedEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedEntry;
    }

    /**
     * Setter for extendedEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1V2ExtendedEntry $extendedEntry
     * @return $this
     */
    public function setExtendedEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse21sp1V2ExtendedEntry $extendedEntry)
    {
        $this->extendedEntry = $extendedEntry;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExtendedEntry()
    {
        $this->extendedEntry = null;
        return $this;
    }
}

