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
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $usageTable = null;

    /**
     * Getter for usageTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getUsageTable()
    {
        return $this->usageTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->usageTable;
    }

    /**
     * Setter for usageTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $usageTable
     * @return $this
     */
    public function setUsageTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $usageTable)
    {
        $this->usageTable = $usageTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUsageTable()
    {
        $this->usageTable = null;
        return $this;
    }


}

