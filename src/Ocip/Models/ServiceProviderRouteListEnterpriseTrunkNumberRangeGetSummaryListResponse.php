<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
 *
 * Response to ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest.
 *         The column headings are "Number Range Start", "Number Range End", "Group Id", "Is Active" and "Extension Length".
 *
 * @see ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:712","type":"sequence"}]
 */
class ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName numberRangeSummaryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 500f9871ed90b8ab3fbd262883ab503b:712
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $numberRangeSummaryTable = null;

    /**
     * Getter for numberRangeSummaryTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getNumberRangeSummaryTable()
    {
        return $this->numberRangeSummaryTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberRangeSummaryTable;
    }

    /**
     * Setter for numberRangeSummaryTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $numberRangeSummaryTable
     * @return $this
     */
    public function setNumberRangeSummaryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $numberRangeSummaryTable)
    {
        $this->numberRangeSummaryTable = $numberRangeSummaryTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberRangeSummaryTable()
    {
        $this->numberRangeSummaryTable = null;
        return $this;
    }
}

