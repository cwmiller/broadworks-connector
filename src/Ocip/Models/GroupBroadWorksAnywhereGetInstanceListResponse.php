<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksAnywhereGetInstanceListResponse
 *
 * Response to the GroupBroadWorksAnywhereGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active".
 *         The column value for "Is Active" can either be true, or false.
 *
 * @see GroupBroadWorksAnywhereGetInstanceListRequest
 * @Groups [{"id":"f39163d0e42e05c4a1692a62f625df9f:125","type":"sequence"}]
 */
class GroupBroadWorksAnywhereGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName broadWorksAnywhereTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group f39163d0e42e05c4a1692a62f625df9f:125
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $broadWorksAnywhereTable = null;

    /**
     * Getter for broadWorksAnywhereTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getBroadWorksAnywhereTable()
    {
        return $this->broadWorksAnywhereTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->broadWorksAnywhereTable;
    }

    /**
     * Setter for broadWorksAnywhereTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $broadWorksAnywhereTable
     * @return $this
     */
    public function setBroadWorksAnywhereTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $broadWorksAnywhereTable)
    {
        $this->broadWorksAnywhereTable = $broadWorksAnywhereTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBroadWorksAnywhereTable()
    {
        $this->broadWorksAnywhereTable = null;
        return $this;
    }
}

