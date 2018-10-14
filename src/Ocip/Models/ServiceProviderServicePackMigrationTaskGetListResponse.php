<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetListResponse
 *
 * Response to ServiceProviderServicePackMigrationTaskGetListRequest.
 *         Contains a table with  a row for each service pack migration task and
 * column headings :
 *         "Start Timestamp Milliseconds", "Name", "Status", "Error Count", "Users
 * Processed", "Users Total".
 *         The start timestamp column is the number of milliseconds since the
 * standard base time known as "the epoch",
 *         namely January 1, 1970, 00:00:00 GMT.
 *         
 *         Replaced By : ServiceProviderServicePackMigrationTaskGetListResponse21
 * in AS data mode
 *
 * @see ServiceProviderServicePackMigrationTaskGetListRequest
 * @see ServiceProviderServicePackMigrationTaskGetListResponse21
 */
class ServiceProviderServicePackMigrationTaskGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setTaskTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $taskTable)
    {
        $this->taskTable = $taskTable;
        return $this;
    }


}

