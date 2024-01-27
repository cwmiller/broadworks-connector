<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
 *
 * Response to GroupRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest.
 *         The response contains a table with columns: "Number Prefix", "User Id", 
 *         "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", "Phone Number", "Extension",  
 *         "Department", "Email Address", "Enterprise Trunk"","Is Active", “Extension Range Start” and “Extension Range End”.
 *         The "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", "Phone Number",  
 *         "Extension", "Department" and "Email Address" columns contains the corresponding attributes of the user possessing the number range. 
 *         The "Enterprise Trunk" column contains the enterprise trunk the user possessing the number range belongs to. 
 *         The "Is Active" column indicates if the number prefix has been activated.  
 *         The “Extension Range Start” column indicates the start for an extension range.
 *         The “Extension Range End” column indicates the end for an extension range.
 *
 * @see GroupRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest
 * @Groups [{"id":"500f9871ed90b8ab3fbd262883ab503b:293","type":"sequence"}]
 */
class GroupRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName numberPrefixSummaryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 500f9871ed90b8ab3fbd262883ab503b:293
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $numberPrefixSummaryTable = null;

    /**
     * Getter for numberPrefixSummaryTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getNumberPrefixSummaryTable()
    {
        return $this->numberPrefixSummaryTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberPrefixSummaryTable;
    }

    /**
     * Setter for numberPrefixSummaryTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $numberPrefixSummaryTable
     * @return $this
     */
    public function setNumberPrefixSummaryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $numberPrefixSummaryTable)
    {
        $this->numberPrefixSummaryTable = $numberPrefixSummaryTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberPrefixSummaryTable()
    {
        $this->numberPrefixSummaryTable = null;
        return $this;
    }
}

