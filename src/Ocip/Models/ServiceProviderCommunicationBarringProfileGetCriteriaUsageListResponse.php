<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderCommunicationBarringProfileGetCriteriaUsageListResponse
 *
 * Response to ServiceProviderCommunicationBarring ProfileGetCriteriaUsageListRequest.  Contains a table of profiles that have the Communication Barring Criteria assigned. The column headings are: "Name" and "Description".
 *
 * @see ProfileGetCriteriaUsageListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:2459","type":"sequence"}]
 */
class ServiceProviderCommunicationBarringProfileGetCriteriaUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName profileTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group e19a9072c2dad499e9f28837da5768db:2459
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

