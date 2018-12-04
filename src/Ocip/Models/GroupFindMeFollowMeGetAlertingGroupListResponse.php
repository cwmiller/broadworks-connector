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
 * @Groups [{"id":"d0d5b8a5908815c6ae522efe732e363a:237","type":"sequence"}]
 */
class GroupFindMeFollowMeGetAlertingGroupListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName alertingGroupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group d0d5b8a5908815c6ae522efe732e363a:237
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $alertingGroupTable = null;

    /**
     * Getter for alertingGroupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getAlertingGroupTable()
    {
        return $this->alertingGroupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alertingGroupTable;
    }

    /**
     * Setter for alertingGroupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alertingGroupTable
     * @return $this
     */
    public function setAlertingGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $alertingGroupTable)
    {
        $this->alertingGroupTable = $alertingGroupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlertingGroupTable()
    {
        $this->alertingGroupTable = null;
        return $this;
    }


}

