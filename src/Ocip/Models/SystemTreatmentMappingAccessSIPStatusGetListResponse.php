<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingAccessSIPStatusGetListResponse
 *
 * Response to a SystemTreatmentMappingAccessSIPStatusGetListRequest. Contains a
 * table with one row per mapping.
 *         The table columns are: "SIP Status Code", "Treatment Id".
 */
class SystemTreatmentMappingAccessSIPStatusGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
    public function setTreatmentMappingTable($treatmentMappingTable)
    {
        $this->treatmentMappingTable = $treatmentMappingTable;
        return $this;
    }


}
