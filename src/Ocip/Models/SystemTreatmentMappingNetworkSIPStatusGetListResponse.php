<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingNetworkSIPStatusGetListResponse
 *
 * Response to a SystemTreatmentMappingNetworkSIPStatusGetListRequest. Contains a table with one row per mapping.
 *         The table columns are: "SIP Status Code", "Treatment Id".
 *
 * @see SystemTreatmentMappingNetworkSIPStatusGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:19226","type":"sequence"}]
 */
class SystemTreatmentMappingNetworkSIPStatusGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treatmentMappingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:19226
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

