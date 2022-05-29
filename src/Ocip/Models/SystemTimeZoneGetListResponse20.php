<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTimeZoneGetListResponse20
 *
 * Response to SystemTimeZoneGetListRequest20.
 *         Contains the configured time zone of the server processing the request and
 *         contains a 2 column table with column headings 'Key' and 'Display Name' and a row
 *         for each time zone.
 *
 * @see SystemTimeZoneGetListRequest20
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18598","type":"sequence"}]
 */
class SystemTimeZoneGetListResponse20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serverTimeZone
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18598
     * @MinLength 1
     * @MaxLength 127
     * @var string|null
     */
    protected $serverTimeZone = null;

    /**
     * @ElementName timeZoneTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18598
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $timeZoneTable = null;

    /**
     * Getter for serverTimeZone
     *
     * @return string
     */
    public function getServerTimeZone()
    {
        return $this->serverTimeZone instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serverTimeZone;
    }

    /**
     * Setter for serverTimeZone
     *
     * @param string $serverTimeZone
     * @return $this
     */
    public function setServerTimeZone($serverTimeZone)
    {
        $this->serverTimeZone = $serverTimeZone;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServerTimeZone()
    {
        $this->serverTimeZone = null;
        return $this;
    }

    /**
     * Getter for timeZoneTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTimeZoneTable()
    {
        return $this->timeZoneTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->timeZoneTable;
    }

    /**
     * Setter for timeZoneTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $timeZoneTable
     * @return $this
     */
    public function setTimeZoneTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $timeZoneTable)
    {
        $this->timeZoneTable = $timeZoneTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTimeZoneTable()
    {
        $this->timeZoneTable = null;
        return $this;
    }


}

