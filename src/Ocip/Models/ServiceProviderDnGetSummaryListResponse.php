<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDnGetSummaryListResponse
 *
 * Response to ServiceProviderDnGetSummaryListRequest.
 *         The column headings are "Phone Numbers, "Group Id" and "Can Delete"
 *
 * @see ServiceProviderDnGetSummaryListRequest
 */
class ServiceProviderDnGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setDnSummaryTable($dnSummaryTable)
    {
        $this->dnSummaryTable = $dnSummaryTable;
        return $this;
    }


}

