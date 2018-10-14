<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
 *
 * Response to
 * ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest.
 *         The column headings are "Number Range Start", "Number Range End", "Group
 * Id" and "Is Active".
 *
 * @see ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest
 */
class ServiceProviderRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName numberRangeSummaryTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $numberRangeSummaryTable = null;

    /**
     * Getter for numberRangeSummaryTable
     *
     * @ElementName numberRangeSummaryTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getNumberRangeSummaryTable()
    {
        return $this->numberRangeSummaryTable;
    }

    /**
     * Setter for numberRangeSummaryTable
     *
     * @ElementName numberRangeSummaryTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $numberRangeSummaryTable
     * @return $this
     */
    public function setNumberRangeSummaryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $numberRangeSummaryTable)
    {
        $this->numberRangeSummaryTable = $numberRangeSummaryTable;
        return $this;
    }


}

