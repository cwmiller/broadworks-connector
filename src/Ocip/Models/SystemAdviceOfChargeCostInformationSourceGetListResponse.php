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
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $costInformationSourceTable = null;

    /**
     * Getter for costInformationSourceTable
     *
     * @ElementName costInformationSourceTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getCostInformationSourceTable()
    {
        return $this->costInformationSourceTable;
    }

    /**
     * Setter for costInformationSourceTable
     *
     * @ElementName costInformationSourceTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $costInformationSourceTable
     * @return $this
     */
    public function setCostInformationSourceTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $costInformationSourceTable)
    {
        $this->costInformationSourceTable = $costInformationSourceTable;
        return $this;
    }


}

