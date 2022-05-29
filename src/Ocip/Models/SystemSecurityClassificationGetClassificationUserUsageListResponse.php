<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSecurityClassificationGetClassificationUserUsageListResponse
 *
 * Response to the SystemSecurityClassificationGetClassificationUserUsageListRequest.
 *         Contains a table with column headings:
 *         "User ID", "Last Name", "First Name", "Phone Number", "Extension", "Service Provider Id", "Group Id".
 *
 * @see SystemSecurityClassificationGetClassificationUserUsageListRequest
 * @Groups [{"id":"6b3afea8308b7fdaab8d385357ca9c2d:228","type":"sequence"}]
 */
class SystemSecurityClassificationGetClassificationUserUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName usageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 6b3afea8308b7fdaab8d385357ca9c2d:228
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

