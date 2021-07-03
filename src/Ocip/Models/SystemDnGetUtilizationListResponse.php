<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetUtilizationListResponse
 *
 * Response to SystemDnUtilizationGetListRequest.
 *         The table columns are: "Service Provider Id", "Phone Numbers", "Assigned to Groups",
 *         "Percentage Assigned", "Is Enterprise", "Activated on Groups", "Reseller Id".
 *
 * 	    The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemDnUtilizationGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9355","type":"sequence"}]
 */
class SystemDnGetUtilizationListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnUtilizationTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9355
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dnUtilizationTable = null;

    /**
     * Getter for dnUtilizationTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDnUtilizationTable()
    {
        return $this->dnUtilizationTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnUtilizationTable;
    }

    /**
     * Setter for dnUtilizationTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnUtilizationTable
     * @return $this
     */
    public function setDnUtilizationTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnUtilizationTable)
    {
        $this->dnUtilizationTable = $dnUtilizationTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnUtilizationTable()
    {
        $this->dnUtilizationTable = null;
        return $this;
    }


}

