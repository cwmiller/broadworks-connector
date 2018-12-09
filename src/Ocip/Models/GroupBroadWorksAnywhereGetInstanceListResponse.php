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
 * @Groups [{"id":"b2dd0919a492fbd36c0e7f346f843ff2:123","type":"sequence"}]
 */
class GroupBroadWorksAnywhereGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName broadWorksAnywhereTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b2dd0919a492fbd36c0e7f346f843ff2:123
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $broadWorksAnywhereTable = null;

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

