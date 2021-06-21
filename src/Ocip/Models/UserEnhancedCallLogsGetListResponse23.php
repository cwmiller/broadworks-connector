<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse23
 *
 * Response to UserEnhancedCallLogsGetListRequest23.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the UserEnhancedCallLogsGetListRequest22, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 *         A list of MixedCallLogsEntry will be returned if the call logs are stored on CDS
 *         A list of ExtendedMixedCallLogsEntry22 will be returned if the call logs are stored on DBS or Couchbase
 *         The logs are sorted by date/time of the call.
 *
 * @see UserEnhancedCallLogsGetListRequest23
 * @see UserEnhancedCallLogsGetListRequest22
 * @Groups [{"id":"f6b3702edb5f67fa12c2c426d98657db:360","type":"sequence","children":[{"id":"f6b3702edb5f67fa12c2c426d98657db:362","type":"choice"}]}]
 */
class UserEnhancedCallLogsGetListResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group f6b3702edb5f67fa12c2c426d98657db:360
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName legacyEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse23LegacyEntry
     * @Group f6b3702edb5f67fa12c2c426d98657db:362
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse23LegacyEntry|null
     */
    private $legacyEntry = null;

    /**
     * @ElementName extendedEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse23ExtendedEntry
     * @Group f6b3702edb5f67fa12c2c426d98657db:362
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse23ExtendedEntry|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse23LegacyEntry
     */
    public function getLegacyEntry()
    {
        return $this->legacyEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->legacyEntry;
    }

    /**
     * Setter for legacyEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse23LegacyEntry $legacyEntry
     * @return $this
     */
    public function setLegacyEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse23LegacyEntry $legacyEntry)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse23ExtendedEntry
     */
    public function getExtendedEntry()
    {
        return $this->extendedEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedEntry;
    }

    /**
     * Setter for extendedEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse23ExtendedEntry $extendedEntry
     * @return $this
     */
    public function setExtendedEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse23ExtendedEntry $extendedEntry)
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

