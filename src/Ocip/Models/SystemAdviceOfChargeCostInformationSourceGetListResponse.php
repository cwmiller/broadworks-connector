<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAdviceOfChargeCostInformationSourceGetListResponse
 *
 * Response to SystemAdviceOfChargeCostInformationSourceGetListRequest.
 *         Contains a table with column headings: "PeerIdentity", "Priority"
 *
 * @see SystemAdviceOfChargeCostInformationSourceGetListRequest
 * @Groups [{"id":"fb1070190f79a86aa955448146b539c7:201","type":"sequence"}]
 */
class SystemAdviceOfChargeCostInformationSourceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName costInformationSourceTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group fb1070190f79a86aa955448146b539c7:201
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

