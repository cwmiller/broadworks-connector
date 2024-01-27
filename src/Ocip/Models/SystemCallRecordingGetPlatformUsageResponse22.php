<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformUsageResponse22
 *
 * Response to SystemCallRecordingGetPlatformUsageRequest.
 *         The response contains a table with columns headings "Organization Id", 
 *         "Organization Type", "Group Id".
 *
 * @see SystemCallRecordingGetPlatformUsageRequest
 * @Groups [{"id":"0731150ec7515df8cd710f04d8f62f66:319","type":"sequence"}]
 */
class SystemCallRecordingGetPlatformUsageResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName groupTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 0731150ec7515df8cd710f04d8f62f66:319
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

