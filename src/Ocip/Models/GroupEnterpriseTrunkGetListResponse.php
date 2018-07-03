<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkGetListResponse
 *
 * Response to GroupEnterpriseTrunkGetListRequest.
 *         Contains a table of enterprise trunks defined in the enterprise
 *         The column headings are: "Enterprise Trunk Name", "Routing Type"
 *
 * @see GroupEnterpriseTrunkGetListRequest
 */
class GroupEnterpriseTrunkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enterpriseTrunkTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $enterpriseTrunkTable = null;

    /**
     * Getter for enterpriseTrunkTable
     *
     * @ElementName enterpriseTrunkTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getEnterpriseTrunkTable()
    {
        return $this->enterpriseTrunkTable;
    }

    /**
     * Setter for enterpriseTrunkTable
     *
     * @ElementName enterpriseTrunkTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $enterpriseTrunkTable
     * @return $this
     */
    public function setEnterpriseTrunkTable($enterpriseTrunkTable)
    {
        $this->enterpriseTrunkTable = $enterpriseTrunkTable;
        return $this;
    }


}

