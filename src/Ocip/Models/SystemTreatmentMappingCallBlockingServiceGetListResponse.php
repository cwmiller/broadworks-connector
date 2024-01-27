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
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:15889","type":"sequence"}]
 */
class SystemTreatmentMappingCallBlockingServiceGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treatmentMappingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 240b50f54d060859e5e275082fdf49f9:15889
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $treatmentMappingTable = null;

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

