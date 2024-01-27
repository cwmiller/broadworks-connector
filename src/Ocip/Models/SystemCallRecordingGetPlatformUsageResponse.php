<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformUsageResponse
 *
 * Response to SystemCallRecordingGetPlatformUsageRequest.
 *         The response contains a table with columns headings "Service Provider Id", "Group Id".
 *     
 *     Replaced by SystemCallRecordingGetPlatformUsageResponse22 in AS data mode.
 *
 * @see SystemCallRecordingGetPlatformUsageRequest
 * @see SystemCallRecordingGetPlatformUsageResponse22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9227","type":"sequence"}]
 */
class SystemCallRecordingGetPlatformUsageResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 240b50f54d060859e5e275082fdf49f9:9227
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $groupTable = null;

    /**
     * Getter for groupTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getGroupTable()
    {
        return $this->groupTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupTable;
    }

    /**
     * Setter for groupTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupTable
     * @return $this
     */
    public function setGroupTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $groupTable)
    {
        $this->groupTable = $groupTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupTable()
    {
        $this->groupTable = null;
        return $this;
    }
}

