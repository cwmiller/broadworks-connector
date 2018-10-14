<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupFindMeFollowMeGetAlertingGroupListResponse
 *
 * Response to the GroupFindMeFollowMeGetAlertingGroupListRequest.
 *         Contains a table with column headings:
 *         "Name", "Priority".
 *
 * @see GroupFindMeFollowMeGetAlertingGroupListRequest
 */
class GroupFindMeFollowMeGetAlertingGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alertingGroupTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $alertingGroupTable = null;

    /**
     * Getter for alertingGroupTable
     *
     * @ElementName alertingGroupTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getAlertingGroupTable()
    {
        return $this->alertingGroupTable;
    }

    /**
     * Setter for alertingGroupTable
     *
     * @ElementName alertingGroupTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $alertingGroupTable
     * @return $this
     */
    public function setAlertingGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alertingGroupTable)
    {
        $this->alertingGroupTable = $alertingGroupTable;
        return $this;
    }


}

