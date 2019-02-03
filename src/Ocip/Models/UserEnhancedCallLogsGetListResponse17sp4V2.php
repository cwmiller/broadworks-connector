<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse17sp4V2
 *
 * Response to UserEnhancedCallLogsGetListRequest17sp4V2.
 *                 Total numbers of rows is:
 *                 - the total number of retrievable logs of the call log type that was specified in the
 *                 UserEnhancedCallLogsGetListRequest17sp4V2,
 *                 if a call log type was specified in the request.
 *                 - the total number of retrievable logs, if no call log type was specified in the request.
 *                 A list of MixedCallLogsEntry will be returned if the call logs are stored on CDS
 *                 A list of ExtendedMixedCallLogsEntry17sp4 will be returned if the call logs are stored on DBS
 *                 The logs are sorted by date/time of the call.
 *
 * @see UserEnhancedCallLogsGetListRequest17sp4V2
 * @see UserEnhancedCallLogsGetListRequest17sp4V2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:32609","type":"sequence","children":[{"id":"ab0042aa512abc10edb3c55e4b416b0b:32611","type":"choice"}]}]
 */
class UserEnhancedCallLogsGetListResponse17sp4V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32609
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName legacyEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4V2LegacyEntry
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32611
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4V2LegacyEntry|null
     */
    private $legacyEntry = null;

    /**
     * @ElementName extendedEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4V2ExtendedEntry
     * @Group ab0042aa512abc10edb3c55e4b416b0b:32611
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4V2ExtendedEntry|null
     */
    private $extendedEntry = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4V2LegacyEntry
     */
    public function getLegacyEntry()
    {
        return $this->legacyEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->legacyEntry;
    }

    /**
     * Setter for legacyEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4V2LegacyEntry $legacyEntry
     * @return $this
     */
    public function setLegacyEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4V2LegacyEntry $legacyEntry)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4V2ExtendedEntry
     */
    public function getExtendedEntry()
    {
        return $this->extendedEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedEntry;
    }

    /**
     * Setter for extendedEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4V2ExtendedEntry $extendedEntry
     * @return $this
     */
    public function setExtendedEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4V2ExtendedEntry $extendedEntry)
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

