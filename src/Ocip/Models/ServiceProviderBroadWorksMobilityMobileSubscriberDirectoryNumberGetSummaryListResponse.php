<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse
 *
 * Response to
 * ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest.
 *         The column headings are "Phone Number", "Group Id" and "Mobile Network".
 *
 * @see
 * ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest
 */
class ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

