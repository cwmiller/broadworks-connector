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
 * @Groups [{"id":"b9c14e2d80e4e7749688ca13ba233b44:306","type":"sequence"}]
 */
class EnterpriseEnterpriseTrunkGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enterpriseTrunkTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group b9c14e2d80e4e7749688ca13ba233b44:306
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $enterpriseTrunkTable = null;

    /**
     * Getter for enterpriseTrunkTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getEnterpriseTrunkTable()
    {
        return $this->enterpriseTrunkTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseTrunkTable;
    }

    /**
     * Setter for enterpriseTrunkTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $enterpriseTrunkTable
     * @return $this
     */
    public function setEnterpriseTrunkTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $enterpriseTrunkTable)
    {
        $this->enterpriseTrunkTable = $enterpriseTrunkTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseTrunkTable()
    {
        $this->enterpriseTrunkTable = null;
        return $this;
    }


}

