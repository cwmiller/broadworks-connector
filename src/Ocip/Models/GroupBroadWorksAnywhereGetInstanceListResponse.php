<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupBroadWorksAnywhereGetInstanceListResponse
 *
 * Response to the GroupBroadWorksAnywhereGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department",
 * "Is Active".
 *         The column value for "Is Active" can either be true, or false.
 */
class GroupBroadWorksAnywhereGetInstanceListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName broadWorksAnywhereTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $broadWorksAnywhereTable = null;

    /**
     * Getter for broadWorksAnywhereTable
     *
     * @ElementName broadWorksAnywhereTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getBroadWorksAnywhereTable()
    {
        return $this->broadWorksAnywhereTable;
    }

    /**
     * Setter for broadWorksAnywhereTable
     *
     * @ElementName broadWorksAnywhereTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $broadWorksAnywhereTable
     * @return $this
     */
    public function setBroadWorksAnywhereTable($broadWorksAnywhereTable)
    {
        $this->broadWorksAnywhereTable = $broadWorksAnywhereTable;
        return $this;
    }


}

