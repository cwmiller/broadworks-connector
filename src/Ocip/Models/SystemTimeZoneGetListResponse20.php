<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTimeZoneGetListResponse20
 *
 * Response to SystemTimeZoneGetListRequest20.
 *         Contains the configured time zone of the server processing the request
 * and
 *         contains a 2 column table with column headings 'Key' and 'Display Name'
 * and a row
 *         for each time zone.
 *
 * @see SystemTimeZoneGetListRequest20
 */
class SystemTimeZoneGetListResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serverTimeZone
     * @var string|null
     */
    private $serverTimeZone = null;

    /**
     * @ElementName timeZoneTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $timeZoneTable = null;

    /**
     * Getter for serverTimeZone
     *
     * @ElementName serverTimeZone
     * @return string|null
     */
    public function getServerTimeZone()
    {
        return $this->serverTimeZone;
    }

    /**
     * Setter for serverTimeZone
     *
     * @ElementName serverTimeZone
     * @param string|null $serverTimeZone
     * @return $this
     */
    public function setServerTimeZone($serverTimeZone)
    {
        $this->serverTimeZone = $serverTimeZone;
        return $this;
    }

    /**
     * Getter for timeZoneTable
     *
     * @ElementName timeZoneTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTimeZoneTable()
    {
        return $this->timeZoneTable;
    }

    /**
     * Setter for timeZoneTable
     *
     * @ElementName timeZoneTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $timeZoneTable
     * @return $this
     */
    public function setTimeZoneTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $timeZoneTable)
    {
        $this->timeZoneTable = $timeZoneTable;
        return $this;
    }


}

