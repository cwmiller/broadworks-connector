<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetCriteriaUsageListResponse
 *
 * Response to the SystemCommunicationBarringProfileGetCriteriaUsageListRequest.
 *         The response contains a table of system Communication Barring Profiles that
 *         use the specific Communication Barring Criteria. The column headings
 *         are "Name" and "Description"
 *
 * @see SystemCommunicationBarringProfileGetCriteriaUsageListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6404","type":"sequence"}]
 */
class SystemCommunicationBarringProfileGetCriteriaUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName profileTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:6404
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

