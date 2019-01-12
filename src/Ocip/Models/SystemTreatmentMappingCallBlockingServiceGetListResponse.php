<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceGetListResponse
 *
 * Response to a SystemTreatmentMappingCallBlockingServiceGetListRequest. Contains a table with one row per mapping.
 *         The table columns are: "Service", "Treatment Id".
 *         
 *         Replaced by: SystemTreatmentMappingCallBlockingServiceGetListResponse19sp1 in AS data mode
 *
 * @see SystemTreatmentMappingCallBlockingServiceGetListRequest
 * @see SystemTreatmentMappingCallBlockingServiceGetListResponse19sp1
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:6894","type":"sequence"}]
 */
class SystemTreatmentMappingCallBlockingServiceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treatmentMappingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group de4d76f01f337fe4694212ec9f771753:6894
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $treatmentMappingTable = null;

    /**
     * Getter for treatmentMappingTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTreatmentMappingTable()
    {
        return $this->treatmentMappingTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentMappingTable;
    }

    /**
     * Setter for treatmentMappingTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $treatmentMappingTable
     * @return $this
     */
    public function setTreatmentMappingTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $treatmentMappingTable)
    {
        $this->treatmentMappingTable = $treatmentMappingTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentMappingTable()
    {
        $this->treatmentMappingTable = null;
        return $this;
    }


}

