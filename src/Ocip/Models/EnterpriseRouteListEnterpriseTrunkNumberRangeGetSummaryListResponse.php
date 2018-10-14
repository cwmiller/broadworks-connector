<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
 *
 * Response to EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest.
 *         The response contains a table with columns: "Number Range Start",
 * "Number Range End", "Group Id", "User Id", 
 *         "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name",
 * "Phone Number", "Extension", "Department", 
 *         "Email Address", "Enterprise Trunk" and "Is Active".
 *         The "User Id", "Last Name", "First Name", "Hiragana Last Name",
 * "Hiragana First Name", "Phone Number", 
 *         "Extension", "Department" and "Email Address" columns contains the
 * corresponding attributes of the user possessing the number range. 
 *         The "Enterprise Trunk" column contains the enterprise trunk the user
 * possessing the number range belongs to. 
 *         The "Is Active" column indicates if the number range has been activated.
 *
 * @see EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest
 */
class EnterpriseRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

