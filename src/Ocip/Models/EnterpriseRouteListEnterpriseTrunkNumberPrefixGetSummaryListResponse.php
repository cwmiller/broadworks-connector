<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
 *
 * Response to EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest.
 *         The response contains a table with columns: "Number Prefix", "Group Id", "User Id", 
 *         "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", "Phone Number", "Extension", "Department", 
 *         "Email Address", "Enterprise Trunk"","Is Active", “Extension Range Start” and “Extension Range End”.
 *         The "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name", "Phone Number", 
 *         "Extension", "Department" and "Email Address" columns contains the corresponding attributes of the user possessing the number range. 
 *         The "Enterprise Trunk" column contains the enterprise trunk the user possessing the number range belongs to. 
 *         The "Is Active" column indicates if the number range has been activated.
 *         The “Extension Range Start” column indicates the start for an extension range.
 *         The “Extension Range End” column indicates the end for an extension range.
 *
 * @see EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest
 * @Groups [{"id":"3f28429898a57a7f7846d3877b22df9f:127","type":"sequence"}]
 */
class EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName prefixSummaryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 3f28429898a57a7f7846d3877b22df9f:127
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

