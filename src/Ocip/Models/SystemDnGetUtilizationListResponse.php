<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetUtilizationListResponse
 *
 * Response to SystemDnUtilizationGetListRequest.
 *         The table columns are: "Service Provider Id", "Phone Numbers", "Assigned
 * to Groups",
 *         "Percentage Assigned", "Is Enterprise", "Activated on Groups", "Reseller
 * Id".
 *
 * 	    The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemDnUtilizationGetListRequest
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
    public function setDnUtilizationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnUtilizationTable)
    {
        $this->dnUtilizationTable = $dnUtilizationTable;
        return $this;
    }


}

