<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetUtilizationListResponse
 *
 * Response to SystemDnUtilizationGetListRequest.
 *         The table columns are: "Service Provider Id", "Phone Numbers", "Assigned
 * to Groups",
 *         "Percentage Assigned", "Is Enterprise" and "Activated on Groups".
 */
class SystemDnGetUtilizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

