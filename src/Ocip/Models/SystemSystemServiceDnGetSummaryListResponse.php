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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18513","type":"sequence"}]
 */
class SystemSystemServiceDnGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName dnSummaryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:18513
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $dnSummaryTable = null;

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

