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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:1982","type":"sequence"}]
 */
class SystemTimeZoneGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName timeZoneTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group de4d76f01f337fe4694212ec9f771753:1982
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $timeZoneTable = null;

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

