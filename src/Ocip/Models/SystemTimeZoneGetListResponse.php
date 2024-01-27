<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTimeZoneGetListResponse
 *
 * Response to SystemTimeZoneGetListRequest.
 *         Contains a 2 column table with column headings 'Key' and 'Display Name' and a row
 *         for each time zone.
 *         
 *         Replaced by: SystemTimeZoneGetListResponse20 in AS data mode
 *
 * @see SystemTimeZoneGetListRequest
 * @see SystemTimeZoneGetListResponse20
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:15382","type":"sequence"}]
 */
class SystemTimeZoneGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName timeZoneTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 240b50f54d060859e5e275082fdf49f9:15382
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $timeZoneTable = null;

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

