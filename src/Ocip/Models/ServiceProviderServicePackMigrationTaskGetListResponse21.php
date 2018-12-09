<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetListResponse21
 *
 * Response to ServiceProviderServicePackMigrationTaskGetListRequest21.
 *         Contains a table with  a row for each service pack migration task and column headings :
 *         "Start Timestamp Milliseconds", "Name", "Status", "Error Count", "Users Processed", "Users Total".
 *         The start timestamp column is the number of milliseconds since the standard base time known as "the epoch",
 *         namely January 1, 1970, 00:00:00 GMT. The status column is the task status which can be Awaiting edit, Pending, 
 *         Processing, Terminating, Terminated, Stopped by system, Completed, or Expired.
 *
 * @see ServiceProviderServicePackMigrationTaskGetListRequest21
 * @Groups [{"id":"8eb862aea0ee5d4211db0a0d3fe7c164:5339","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskGetListResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName taskTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 8eb862aea0ee5d4211db0a0d3fe7c164:5339
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

