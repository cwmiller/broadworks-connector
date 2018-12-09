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
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:14198","type":"sequence"}]
 */
class SystemServicePackMigrationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName maxSimultaneousMigrationTasks
     * @Type int
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:14198
     * @var int|null
     */
    private $maxSimultaneousMigrationTasks = null;

    /**
     * Getter for maxSimultaneousMigrationTasks
     *
     * @return int
     */
    public function getMaxSimultaneousMigrationTasks()
    {
        return $this->maxSimultaneousMigrationTasks instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxSimultaneousMigrationTasks;
    }

    /**
     * Setter for maxSimultaneousMigrationTasks
     *
     * @param int $maxSimultaneousMigrationTasks
     * @return $this
     */
    public function setMaxSimultaneousMigrationTasks($maxSimultaneousMigrationTasks)
    {
        $this->maxSimultaneousMigrationTasks = $maxSimultaneousMigrationTasks;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxSimultaneousMigrationTasks()
    {
        $this->maxSimultaneousMigrationTasks = null;
        return $this;
    }


}

