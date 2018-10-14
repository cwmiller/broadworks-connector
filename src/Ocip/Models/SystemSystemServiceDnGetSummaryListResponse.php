<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSystemServiceDnGetSummaryListResponse
 *
 * Response to SystemSystemServiceDnGetSummaryListRequest.
 *         The column headings are "Phone Numbers" and "Assigned".
 *         The possible values for "Assigned" are true, false.
 *
 * @see SystemSystemServiceDnGetSummaryListRequest
 */
class SystemSystemServiceDnGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnSummaryTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dnSummaryTable = null;

    /**
     * Getter for dnSummaryTable
     *
     * @ElementName dnSummaryTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getDnSummaryTable()
    {
        return $this->dnSummaryTable;
    }

    /**
     * Setter for dnSummaryTable
     *
     * @ElementName dnSummaryTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $dnSummaryTable
     * @return $this
     */
    public function setDnSummaryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnSummaryTable)
    {
        $this->dnSummaryTable = $dnSummaryTable;
        return $this;
    }


}

