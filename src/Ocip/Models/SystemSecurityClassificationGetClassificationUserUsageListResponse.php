<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetClassificationUserUsageListResponse
 *
 * Response to the
 * SystemSecurityClassificationGetClassificationUserUsageListRequest.
 *         Contains a table with column headings:
 *         "User ID", "Last Name", "First Name", "Phone Number", "Extension",
 * "Service Provider Id", "Group Id".
 */
class SystemSecurityClassificationGetClassificationUserUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

