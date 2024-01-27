<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringProfileGetIncomingCriteriaUsageListResponse
 *
 * Response to ServiceProviderCommunicationBarringProfileGetIncomingCriteriaUsageListRequest.
 *         Contains a table of profiles that have the Communication Barring Incoming Criteria assigned.
 *         The column headings are: "Name" and "Description".
 *
 * @see ServiceProviderCommunicationBarringProfileGetIncomingCriteriaUsageListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:2528","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringProfileGetIncomingCriteriaUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName profileTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:2528
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $profileTable = null;

    /**
     * Getter for profileTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getProfileTable()
    {
        return $this->profileTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->profileTable;
    }

    /**
     * Setter for profileTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $profileTable
     * @return $this
     */
    public function setProfileTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $profileTable)
    {
        $this->profileTable = $profileTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProfileTable()
    {
        $this->profileTable = null;
        return $this;
    }
}

