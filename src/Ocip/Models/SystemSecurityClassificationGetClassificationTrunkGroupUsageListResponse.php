<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetClassificationTrunkGroupUsageListResponse
 *
 * Response to the SystemSecurityClassificationGetClassificationTrunkGroupUsageListRequest.
 *         Contains a table with column headings:
 *         "Trunk Group Name","Group ID","Organization ID" and "Organization Type"
 *
 * @see SystemSecurityClassificationGetClassificationTrunkGroupUsageListRequest
 * @Groups [{"id":"6b3afea8308b7fdaab8d385357ca9c2d:189","type":"sequence"}]
 */
class SystemSecurityClassificationGetClassificationTrunkGroupUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName usageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:189
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $usageTable = null;

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

