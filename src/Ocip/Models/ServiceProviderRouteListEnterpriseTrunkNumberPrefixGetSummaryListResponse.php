<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
 *
 * Response to ServiceProviderRouteListEnterpriseTrunkPrefixGetSummaryListRequest.
 *         The column headings are "Number Prefix", "Group Id" and "Is Active".
 *
 * @see ServiceProviderRouteListEnterpriseTrunkPrefixGetSummaryListRequest
 * @Groups [{"id":"3f28429898a57a7f7846d3877b22df9f:551","type":"sequence"}]
 */
class ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName prefixSummaryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 3f28429898a57a7f7846d3877b22df9f:551
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $prefixSummaryTable = null;

    /**
     * Getter for prefixSummaryTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getPrefixSummaryTable()
    {
        return $this->prefixSummaryTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->prefixSummaryTable;
    }

    /**
     * Setter for prefixSummaryTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $prefixSummaryTable
     * @return $this
     */
    public function setPrefixSummaryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $prefixSummaryTable)
    {
        $this->prefixSummaryTable = $prefixSummaryTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPrefixSummaryTable()
    {
        $this->prefixSummaryTable = null;
        return $this;
    }


}

