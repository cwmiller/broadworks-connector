<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
 *
 * Response to ServiceProviderRouteListEnterpriseTrunkPrefixGetSummaryListRequest.
 *         The column headings are "Number Prefix", "Group Id" ","Is Active", “Extension Range Start” and “Extension Range End”.
 *
 * @see ServiceProviderRouteListEnterpriseTrunkPrefixGetSummaryListRequest
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:559","type":"sequence"}]
 */
class ServiceProviderRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName prefixSummaryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 500f9871ed90b8ab3fbd262883ab503b:559
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $prefixSummaryTable = null;

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

