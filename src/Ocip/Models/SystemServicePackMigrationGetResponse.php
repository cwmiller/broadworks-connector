<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServicePackMigrationGetResponse
 *
 * Response to the SystemServicePackMigrationGetRequest.
 *         The response contains the Service Pack Migration system level settings.
 *
 * @see SystemServicePackMigrationGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:16389","type":"sequence"}]
 */
class SystemServicePackMigrationGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName maxSimultaneousMigrationTasks
     * @Type int
     * @Group da582a1f8028404e70d260cf1f891033:16389
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

