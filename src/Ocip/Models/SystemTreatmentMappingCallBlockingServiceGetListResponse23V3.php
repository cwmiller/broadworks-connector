<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceGetListResponse23V3
 *
 * Response to a SystemTreatmentMappingCallBlockingServiceGetListRequest23V3. 
 *         Contains a table with one row per mapping.
 *         The table columns are: "Service", "Treatment Id".
 *  
 *         The Service column list the service or policy which is using corresponding treatment, and can be OCP, EOCP, ICP, ACR, SCR, SCA, AAC, Intercept, PTT, CommBarring, SAC, IncomingCommBarring, HierCommBarring, IncomHierCommBarring, BWMobilityDenyOrig, BWMobilityDenyTerm, ETRouteExhaust, CallPark, NumberPortability, ConcTerminatingAlertingPolicy, AutomaticCollectCall, ETRouteExhaustUnreachable, TCUG, RPAdmission.
 *         
 *         Replaced by: SystemTreatmentMappingCallBlockingServiceGetListResponse24 in AS data mode.
 *
 * @see SystemTreatmentMappingCallBlockingServiceGetListRequest23V3
 * @see SystemTreatmentMappingCallBlockingServiceGetListResponse24
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:16001","type":"sequence"}]
 */
class SystemTreatmentMappingCallBlockingServiceGetListResponse23V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treatmentMappingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 240b50f54d060859e5e275082fdf49f9:16001
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

