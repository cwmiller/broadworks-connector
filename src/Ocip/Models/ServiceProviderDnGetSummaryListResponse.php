<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDnGetSummaryListResponse
 *
 * Response to ServiceProviderDnGetSummaryListRequest.
 *         The column headings are "Phone Numbers, "Group Id" and "Can Delete"
 *
 * @see ServiceProviderDnGetSummaryListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:3990","type":"sequence"}]
 */
class ServiceProviderDnGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName dnSummaryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:3990
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

