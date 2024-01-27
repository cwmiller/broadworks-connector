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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16405","type":"sequence"}]
 */
class SystemServicePackMigrationModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName maxSimultaneousMigrationTasks
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:16405
     * @MinInclusive 1
     * @MaxInclusive 10
     * @var int|null
     */
    protected $maxSimultaneousMigrationTasks = null;

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

