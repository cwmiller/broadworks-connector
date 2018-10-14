<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
 *
 * Response to SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest.
 *         The column headings are "Number Prefix", "Service Provider Id", "Is
 * Enterprise", "User Id", "Enterprise Trunk", "Is Active", "Reseller Id".
 *
 * @see SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest
 */
class SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName prefixSummaryTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $prefixSummaryTable = null;

    /**
     * Getter for prefixSummaryTable
     *
     * @ElementName prefixSummaryTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getPrefixSummaryTable()
    {
        return $this->prefixSummaryTable;
    }

    /**
     * Setter for prefixSummaryTable
     *
     * @ElementName prefixSummaryTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $prefixSummaryTable
     * @return $this
     */
    public function setPrefixSummaryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $prefixSummaryTable)
    {
        $this->prefixSummaryTable = $prefixSummaryTable;
        return $this;
    }


}

