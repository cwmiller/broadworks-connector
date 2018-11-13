<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeCostInformationSourceGetListResponse
 *
 * Response to SystemAdviceOfChargeCostInformationSourceGetListRequest.
 *         Contains a table with column headings: "PeerIdentity", "Priority"
 *
 * @see SystemAdviceOfChargeCostInformationSourceGetListRequest
 */
class SystemAdviceOfChargeCostInformationSourceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName costInformationSourceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $costInformationSourceTable = null;

    /**
     * Getter for costInformationSourceTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getCostInformationSourceTable()
    {
        return $this->costInformationSourceTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->costInformationSourceTable;
    }

    /**
     * Setter for costInformationSourceTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $costInformationSourceTable
     * @return $this
     */
    public function setCostInformationSourceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $costInformationSourceTable)
    {
        $this->costInformationSourceTable = $costInformationSourceTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCostInformationSourceTable()
    {
        $this->costInformationSourceTable = null;
        return $this;
    }


}

