<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemServiceDnGetUsageListResponse
 *
 * Response to SystemSystemServiceDnGetUsageListRequest.
 *         The table columns are:  "Phone Number", "Id",
 *         "Name", and "System Service".
 *         The possible values for "System Service" is "System Voice Portal".
 *
 * @see SystemSystemServiceDnGetUsageListRequest
 */
class SystemSystemServiceDnGetUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnUtilizationTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dnUtilizationTable = null;

    /**
     * Getter for dnUtilizationTable
     *
     * @ElementName dnUtilizationTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDnUtilizationTable()
    {
        return $this->dnUtilizationTable;
    }

    /**
     * Setter for dnUtilizationTable
     *
     * @ElementName dnUtilizationTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $dnUtilizationTable
     * @return $this
     */
    public function setDnUtilizationTable($dnUtilizationTable)
    {
        $this->dnUtilizationTable = $dnUtilizationTable;
        return $this;
    }


}

