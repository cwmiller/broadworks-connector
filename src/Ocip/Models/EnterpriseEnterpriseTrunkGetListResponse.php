<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkGetListResponse
 *
 * Response to EnterpriseEnterpriseTrunkGetListRequest.
 *         Contains a table of enterprise trunks defined in the enterprise
 *         The column headings are: "Enterprise Trunk Name", "Routing Type"
 *
 * @see EnterpriseEnterpriseTrunkGetListRequest
 */
class EnterpriseEnterpriseTrunkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setEnterpriseTrunkTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $enterpriseTrunkTable)
    {
        $this->enterpriseTrunkTable = $enterpriseTrunkTable;
        return $this;
    }


}

