<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse
 *
 * Response to ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest.
 *         The column headings are "Phone Number", "Group Id" and "Mobile Network".
 *
 * @see ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListRequest
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:629","type":"sequence"}]
 */
class ServiceProviderBroadWorksMobilityMobileSubscriberDirectoryNumberGetSummaryListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mobileSubscriberDirectoryNumbersSummaryTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:629
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $mobileSubscriberDirectoryNumbersSummaryTable = null;

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

