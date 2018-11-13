<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupTrunkGroupUserCreationTaskGetListResponse14sp4
 *
 * Response to GroupTrunkGroupUserCreationTaskGetListRequest14sp4.
 *         Contains a table with a row for each user creation task and column
 * headings :
 *         "Name", "Status", "Users Created", "Total Users To Create", "Error
 * Count".
 *
 * @see GroupTrunkGroupUserCreationTaskGetListRequest14sp4
 */
class GroupTrunkGroupUserCreationTaskGetListResponse14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName taskTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
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

