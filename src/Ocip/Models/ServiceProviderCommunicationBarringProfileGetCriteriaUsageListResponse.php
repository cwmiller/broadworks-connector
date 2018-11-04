<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringProfileGetCriteriaUsageListResponse
 *
 * Response to
 * ServiceProviderCommunicationBarringProfileGetCriteriaUsageListRequest.  Contains
 * a table of profiles that have the Communication Barring Criteria assigned. The
 * column headings are: "Name" and "Description".
 *
 * @see ServiceProviderCommunicationBarringProfileGetCriteriaUsageListRequest
 */
class ServiceProviderCommunicationBarringProfileGetCriteriaUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName profileTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $profileTable = null;

    /**
     * Getter for profileTable
     *
     * @ElementName profileTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getProfileTable()
    {
        return $this->profileTable;
    }

    /**
     * Setter for profileTable
     *
     * @ElementName profileTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $profileTable
     * @return $this
     */
    public function setProfileTable($profileTable)
    {
        $this->profileTable = $profileTable;
        return $this;
    }


}

