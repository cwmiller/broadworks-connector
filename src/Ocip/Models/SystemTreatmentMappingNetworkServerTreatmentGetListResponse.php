<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingNetworkServerTreatmentGetListResponse
 *
 * Response to a SystemTreatmentMappingNetworkServerTreatmentGetListRequest.
 * Contains a table with one row per mapping.
 *         The table columns are: "NS Treatment", "Treatment Id".
 *
 * @see SystemTreatmentMappingNetworkServerTreatmentGetListRequest
 */
class SystemTreatmentMappingNetworkServerTreatmentGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treatmentMappingTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $treatmentMappingTable = null;

    /**
     * Getter for treatmentMappingTable
     *
     * @ElementName treatmentMappingTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTreatmentMappingTable()
    {
        return $this->treatmentMappingTable;
    }

    /**
     * Setter for treatmentMappingTable
     *
     * @ElementName treatmentMappingTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $treatmentMappingTable
     * @return $this
     */
    public function setTreatmentMappingTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $treatmentMappingTable)
    {
        $this->treatmentMappingTable = $treatmentMappingTable;
        return $this;
    }


}

