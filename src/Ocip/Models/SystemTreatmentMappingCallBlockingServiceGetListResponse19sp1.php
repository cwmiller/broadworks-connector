<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceGetListResponse19sp1
 *
 * Response to a SystemTreatmentMappingCallBlockingServiceGetListRequest19sp1.
 * Contains a table with one row per mapping.
 *         The table columns are: "Service", "Treatment Id".
 */
class SystemTreatmentMappingCallBlockingServiceGetListResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

