<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskGetListResponse
 *
 * Response to GroupTrunkGroupUserCreationTaskGetListRequest.
 *         Contains a table with a row for each user creation task and column
 * headings :
 *         "Name", "Status", "Users Created", "Total Users To Create", "Error
 * Count".
 */
class GroupTrunkGroupUserCreationTaskGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName taskTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $taskTable = null;

    /**
     * Getter for taskTable
     *
     * @ElementName taskTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTaskTable()
    {
        return $this->taskTable;
    }

    /**
     * Setter for taskTable
     *
     * @ElementName taskTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $taskTable
     * @return $this
     */
    public function setTaskTable($taskTable)
    {
        $this->taskTable = $taskTable;
        return $this;
    }


}

