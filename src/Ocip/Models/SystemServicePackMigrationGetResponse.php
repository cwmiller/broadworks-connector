<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServicePackMigrationGetResponse
 *
 * Response to the SystemServicePackMigrationGetRequest.
 *         The response contains the Service Pack Migration system level settings.
 */
class SystemServicePackMigrationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName maxSimultaneousMigrationTasks
     * @var int|null
     */
    private $maxSimultaneousMigrationTasks = null;

    /**
     * Getter for maxSimultaneousMigrationTasks
     *
     * @ElementName maxSimultaneousMigrationTasks
     * @return int|null
     */
    public function getMaxSimultaneousMigrationTasks()
    {
        return $this->maxSimultaneousMigrationTasks;
    }

    /**
     * Setter for maxSimultaneousMigrationTasks
     *
     * @ElementName maxSimultaneousMigrationTasks
     * @param int|null $maxSimultaneousMigrationTasks
     * @return $this
     */
    public function setMaxSimultaneousMigrationTasks($maxSimultaneousMigrationTasks)
    {
        $this->maxSimultaneousMigrationTasks = $maxSimultaneousMigrationTasks;
        return $this;
    }


}

