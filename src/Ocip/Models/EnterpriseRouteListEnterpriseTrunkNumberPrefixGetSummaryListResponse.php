<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
 *
 * Response to EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest.
 *         The response contains a table with columns: "Number Prefix", "Group Id",
 * "User Id", 
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
 * @see EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest
 */
class EnterpriseRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

