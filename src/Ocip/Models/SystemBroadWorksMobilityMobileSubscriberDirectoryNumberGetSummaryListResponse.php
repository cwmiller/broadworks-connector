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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $mobileSubscriberDirectoryNumbersSummaryTable = null;

    /**
     * Getter for mobileSubscriberDirectoryNumbersSummaryTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getMobileSubscriberDirectoryNumbersSummaryTable()
    {
        return $this->mobileSubscriberDirectoryNumbersSummaryTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileSubscriberDirectoryNumbersSummaryTable;
    }

    /**
     * Setter for mobileSubscriberDirectoryNumbersSummaryTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileSubscriberDirectoryNumbersSummaryTable
     * @return $this
     */
    public function setMobileSubscriberDirectoryNumbersSummaryTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $mobileSubscriberDirectoryNumbersSummaryTable)
    {
        $this->mobileSubscriberDirectoryNumbersSummaryTable = $mobileSubscriberDirectoryNumbersSummaryTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileSubscriberDirectoryNumbersSummaryTable()
    {
        $this->mobileSubscriberDirectoryNumbersSummaryTable = null;
        return $this;
    }


}

