<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetListResponse
 *
 * Response to the SystemOfficeZoneGetListRequest.
 *         The response contains a table of all Office Zones
 *         in the system. The column headings are "Name" and "Description"
 *
 * @see SystemOfficeZoneGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14118","type":"sequence"}]
 */
class SystemOfficeZoneGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName officeZoneTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:14118
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $officeZoneTable = null;

    /**
     * Getter for officeZoneTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getOfficeZoneTable()
    {
        return $this->officeZoneTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->officeZoneTable;
    }

    /**
     * Setter for officeZoneTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $officeZoneTable
     * @return $this
     */
    public function setOfficeZoneTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $officeZoneTable)
    {
        $this->officeZoneTable = $officeZoneTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOfficeZoneTable()
    {
        $this->officeZoneTable = null;
        return $this;
    }
}

