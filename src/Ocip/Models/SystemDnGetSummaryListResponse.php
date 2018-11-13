<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetSummaryListResponse
 *
 * Response to SystemDnGetSummaryListRequest.
 *         The column headings are "Phone Numbers, "Service Provider Id", "Is
 * Enterprise" and "Reseller Id".
 *         
 *         The following columns are only returned in AS data mode:       
 *           "Reseller Id"
 *
 * @see SystemDnGetSummaryListRequest
 */
class SystemDnGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName dnSummaryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $dnSummaryTable = null;

    /**
     * Getter for dnSummaryTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getDnSummaryTable()
    {
        return $this->dnSummaryTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnSummaryTable;
    }

    /**
     * Setter for dnSummaryTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnSummaryTable
     * @return $this
     */
    public function setDnSummaryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $dnSummaryTable)
    {
        $this->dnSummaryTable = $dnSummaryTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnSummaryTable()
    {
        $this->dnSummaryTable = null;
        return $this;
    }


}

