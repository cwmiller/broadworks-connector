<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserEnhancedCallLogsGetListResponse17sp4
 *
 * Response to UserEnhancedCallLogsGetListRequest17sp4.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the UserEnhancedCallLogsGetListRequest17sp4, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 *         A list of MixedCallLogsEntry will be returned if the call logs are stored on CDS
 *         A list of ExtendedMixedCallLogsEntry will be returned if the call logs are stored on DBS
 *         The logs are sorted by date/time of the call.
 *         Replaced by UserEnhancedCallLogsGetListResponse17sp4V2.
 *         Originally deprecated in release 20.
 *
 * @see UserEnhancedCallLogsGetListRequest17sp4
 * @see UserEnhancedCallLogsGetListRequest17sp4
 * @see UserEnhancedCallLogsGetListResponse17sp4V2
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:34668","type":"sequence","children":[{"id":"1a79c7896cb04feac6eff47a5321756e:34670","type":"choice","children":[{"id":"1a79c7896cb04feac6eff47a5321756e:34674","type":"sequence"},{"id":"1a79c7896cb04feac6eff47a5321756e:34682","type":"sequence"}]}]}]
 */
class UserEnhancedCallLogsGetListResponse17sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName totalNumberOfRows
     * @Type int
     * @Group 1a79c7896cb04feac6eff47a5321756e:34668
     * @var int|null
     */
    private $totalNumberOfRows = null;

    /**
     * @ElementName legacyEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4LegacyEntry
     * @Group 1a79c7896cb04feac6eff47a5321756e:34670
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4LegacyEntry|null
     */
    private $legacyEntry = null;

    /**
     * @ElementName extendedEntry
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4ExtendedEntry
     * @Group 1a79c7896cb04feac6eff47a5321756e:34670
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4ExtendedEntry|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4LegacyEntry
     */
    public function getLegacyEntry()
    {
        return $this->legacyEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->legacyEntry;
    }

    /**
     * Setter for legacyEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4LegacyEntry $legacyEntry
     * @return $this
     */
    public function setLegacyEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4LegacyEntry $legacyEntry)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4ExtendedEntry
     */
    public function getExtendedEntry()
    {
        return $this->extendedEntry instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->extendedEntry;
    }

    /**
     * Setter for extendedEntry
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4ExtendedEntry $extendedEntry
     * @return $this
     */
    public function setExtendedEntry(\CWM\BroadWorksConnector\Ocip\Models\UserEnhancedCallLogsGetListResponse17sp4ExtendedEntry $extendedEntry)
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

