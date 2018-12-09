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
 * @Groups [{"id":"03b1e8852a59a842f834331786163273:228","type":"sequence"}]
 */
class SystemSecurityClassificationGetClassificationUserUsageListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName usageTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 03b1e8852a59a842f834331786163273:228
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

