<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
 *
 * Response to SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest.
 *         The column headings are "Number Range Start", "Number Range End",
 * "Service Provider Id", "Is Enterprise", "User Id", "Enterprise Trunk", "Is
 * Active", "Reseller Id".
 */
class SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setNumberRangeSummaryTable($numberRangeSummaryTable)
    {
        $this->numberRangeSummaryTable = $numberRangeSummaryTable;
        return $this;
    }


}

