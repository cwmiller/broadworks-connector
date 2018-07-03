<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaGroupUsageListResponse
 *
 * Response to SystemMediaGroupUsageListRequest.
 *         Contains a table of SAC groups associated with the media group.
 *         The column headings are: "SAC Group Name", "Organization Id",
 * "Organization Type", and "Group Id".
 *         The "Group Id" will be empty for enterprise SAC groups.
 *
 * @see SystemMediaGroupUsageListRequest
 */
class SystemMediaGroupUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName usageTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $usageTable = null;

    /**
     * Getter for usageTable
     *
     * @ElementName usageTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getUsageTable()
    {
        return $this->usageTable;
    }

    /**
     * Setter for usageTable
     *
     * @ElementName usageTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $usageTable
     * @return $this
     */
    public function setUsageTable($usageTable)
    {
        $this->usageTable = $usageTable;
        return $this;
    }


}

