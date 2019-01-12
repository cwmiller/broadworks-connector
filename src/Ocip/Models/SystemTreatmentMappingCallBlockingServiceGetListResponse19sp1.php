<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceGetListResponse19sp1
 *
 * Response to a SystemTreatmentMappingCallBlockingServiceGetListRequest19sp1. 
 *         Contains a table with one row per mapping.
 *         The table columns are: "Service", "Treatment Id".
 *         The Service column list the service or policy which is using corresponding treatment, and can be OCP, EOCP, ICP, ACR, 
 *         SCR, SCA, AAC, Intercept, PTT, CommBarring, SAC, IncomingCommBarring, HierCommBarring, IncomHierCommBarring, 
 *         BWMobilityDenyOrig, BWMobilityDenyTerm, ETRouteExhaust, CallPark, NumberPortability.
 *         
 *         Replaced by: SystemTreatmentMappingCallBlockingServiceGetListResponse22
 *
 * @see SystemTreatmentMappingCallBlockingServiceGetListRequest19sp1
 * @see SystemTreatmentMappingCallBlockingServiceGetListResponse22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:38501","type":"sequence"}]
 */
class SystemTreatmentMappingCallBlockingServiceGetListResponse19sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treatmentMappingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group ab0042aa512abc10edb3c55e4b416b0b:38501
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

