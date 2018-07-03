<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetClassificationTrunkGroupUsageListResponse
 *
 * Response to the
 * SystemSecurityClassificationGetClassificationTrunkGroupUsageListRequest.
 *         Contains a table with column headings:
 *         "Trunk Group Name","Group ID","Organization ID" and "Organization Type"
 *
 * @see SystemSecurityClassificationGetClassificationTrunkGroupUsageListRequest
 */
class SystemSecurityClassificationGetClassificationTrunkGroupUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

