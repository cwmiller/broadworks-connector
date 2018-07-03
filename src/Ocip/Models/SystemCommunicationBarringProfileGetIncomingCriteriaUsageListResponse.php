<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCommunicationBarringProfileGetIncomingCriteriaUsageListResponse
 *
 * Response to the
 * SystemCommunicationBarringProfileGetIncomingCriteriaUsageListRequest.
 *         The response contains a table of system Communication Barring Profiles
 * that
 *         use the specific Communication Barring Incoming Criteria. The column
 * headings
 *         are "Name" and "Description"
 *
 * @see SystemCommunicationBarringProfileGetIncomingCriteriaUsageListRequest
 */
class SystemCommunicationBarringProfileGetIncomingCriteriaUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

