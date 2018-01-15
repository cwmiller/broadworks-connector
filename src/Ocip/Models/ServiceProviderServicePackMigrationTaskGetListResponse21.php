<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetListResponse21
 *
 * Response to ServiceProviderServicePackMigrationTaskGetListRequest21.
 *         Contains a table with  a row for each service pack migration task and
 * column headings :
 *         "Start Timestamp Milliseconds", "Name", "Status", "Error Count", "Users
 * Processed", "Users Total".
 *         The start timestamp column is the number of milliseconds since the
 * standard base time known as "the epoch",
 *         namely January 1, 1970, 00:00:00 GMT. The status column is the task
 * status which can be Awaiting edit, Pending, 
 *         Processing, Terminating, Terminated, Stopped by system, Completed, or
 * Expired.
 */
class ServiceProviderServicePackMigrationTaskGetListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

