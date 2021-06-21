<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackMigrationTaskGetListResponse
 *
 * Response to ServiceProviderServicePackMigrationTaskGetListRequest.
 *         Contains a table with  a row for each service pack migration task and column headings :
 *         "Start Timestamp Milliseconds", "Name", "Status", "Error Count", "Users Processed", "Users Total".
 *         The start timestamp column is the number of milliseconds since the standard base time known as "the epoch",
 *         namely January 1, 1970, 00:00:00 GMT.
 *         
 *         Replaced By : ServiceProviderServicePackMigrationTaskGetListResponse21 in AS data mode
 *
 * @see ServiceProviderServicePackMigrationTaskGetListRequest
 * @see ServiceProviderServicePackMigrationTaskGetListResponse21
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:6253","type":"sequence"}]
 */
class ServiceProviderServicePackMigrationTaskGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName taskTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group de4d76f01f337fe4694212ec9f771753:6253
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

