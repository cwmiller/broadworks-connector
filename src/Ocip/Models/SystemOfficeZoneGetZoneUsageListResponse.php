<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOfficeZoneGetZoneUsageListResponse
 *
 * Response to the SystemOfficeZoneGetZoneUsageListRequest.
 *         The response contains a table of all Office Zones that
 *         contain the specific Zone. The column headings
 *         are "Name" and "Description"
 *
 * @see SystemOfficeZoneGetZoneUsageListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:14189","type":"sequence"}]
 */
class SystemOfficeZoneGetZoneUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName officeZoneTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:14189
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

