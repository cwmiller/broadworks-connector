<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTimeZoneGetListResponse
 *
 * Response to SystemTimeZoneGetListRequest.
 *         Contains a 2 column table with column headings 'Key' and 'Display Name'
 * and a row
 *         for each time zone.
 *         
 *         Replaced by: SystemTimeZoneGetListResponse20 in AS data mode
 */
class SystemTimeZoneGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeZoneTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $timeZoneTable = null;

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
    public function setTimeZoneTable($timeZoneTable)
    {
        $this->timeZoneTable = $timeZoneTable;
        return $this;
    }


}

