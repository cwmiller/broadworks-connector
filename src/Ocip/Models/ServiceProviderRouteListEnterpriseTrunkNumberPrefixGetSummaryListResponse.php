<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
 *
 * Response to ServiceProviderRouteListEnterpriseTrunkPrefixGetSummaryListRequest.
 *         The column headings are "Number Prefix", "Group Id" and "Is Active".
 *
 * @see ServiceProviderRouteListEnterpriseTrunkPrefixGetSummaryListRequest
 */
class ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

