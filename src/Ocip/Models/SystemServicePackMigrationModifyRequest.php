<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServicePackMigrationModifyRequest
 *
 * Modify system level settings for Service Pack Migration.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemServicePackMigrationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

