<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskGetListResponse
 *
 * Response to GroupTrunkGroupUserCreationTaskGetListRequest.
 *         Contains a table with a row for each user creation task and column headings :
 *         "Name", "Status", "Users Created", "Total Users To Create", "Error Count".
 *
 * @see GroupTrunkGroupUserCreationTaskGetListRequest
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:16052","type":"sequence"}]
 */
class GroupTrunkGroupUserCreationTaskGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName taskTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16052
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $taskTable = null;

    /**
     * Getter for taskTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTaskTable()
    {
        return $this->taskTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->taskTable;
    }

    /**
     * Setter for taskTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $taskTable
     * @return $this
     */
    public function setTaskTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $taskTable)
    {
        $this->taskTable = $taskTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTaskTable()
    {
        $this->taskTable = null;
        return $this;
    }


}

