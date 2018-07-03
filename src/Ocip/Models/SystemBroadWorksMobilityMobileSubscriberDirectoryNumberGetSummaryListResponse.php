<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse
 *
 * Response to
 * SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest.
 *         The response contains a table with columns: "Mobile Number", "Mobile
 * Network", "Service Provider Id", 
 *         "Is Enterprise", "Group Id", "User Id", "Last Name", "First Name",
 * "Hiragana Last Name", 
 *         "Hiragana First Name", "Phone Number", "Extension" and "Reseller Id".
 *         
 *         The following columns are only returned in AS data mode:       
 *              "Reseller Id"
 *
 * @see
 * SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest
 */
class SystemBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileSubscriberDirectoryNumbersSummaryTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mobileSubscriberDirectoryNumbersSummaryTable = null;

    /**
     * Getter for mobileSubscriberDirectoryNumbersSummaryTable
     *
     * @ElementName mobileSubscriberDirectoryNumbersSummaryTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getMobileSubscriberDirectoryNumbersSummaryTable()
    {
        return $this->mobileSubscriberDirectoryNumbersSummaryTable;
    }

    /**
     * Setter for mobileSubscriberDirectoryNumbersSummaryTable
     *
     * @ElementName mobileSubscriberDirectoryNumbersSummaryTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $mobileSubscriberDirectoryNumbersSummaryTable
     * @return $this
     */
    public function setMobileSubscriberDirectoryNumbersSummaryTable($mobileSubscriberDirectoryNumbersSummaryTable)
    {
        $this->mobileSubscriberDirectoryNumbersSummaryTable = $mobileSubscriberDirectoryNumbersSummaryTable;
        return $this;
    }


}

