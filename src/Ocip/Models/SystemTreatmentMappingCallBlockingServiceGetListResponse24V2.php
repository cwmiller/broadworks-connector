<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceGetListResponse24V2
 *
 * Response to a SystemTreatmentMappingCallBlockingServiceGetListRequest24V2. 
 *         Contains a table with one row per mapping.
 *         The table columns are: "Service", "Treatment Id".
 *  
 *         The Service column list the service or policy which is using corresponding treatment, and can be OCP, EOCP, ICP, ACR, SCR, SCA, AAC, Intercept, PTT, CommBarring, SAC, IncomingCommBarring, HierCommBarring, IncomHierCommBarring, BWMobilityDenyOrig, BWMobilityDenyTerm, ETRouteExhaust, CallPark, NumberPortability, ConcTerminatingAlertingPolicy, AutomaticCollectCall, ETRouteExhaustUnreachable, TCUG, RPAdmission, MaximumRedirectionDepthOnBusy, MaximumRedirectionDepthOnDiversion, ETRouteExhaustBusy.
 *
 * @see SystemTreatmentMappingCallBlockingServiceGetListRequest24V2
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18983","type":"sequence"}]
 */
class SystemTreatmentMappingCallBlockingServiceGetListResponse24V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treatmentMappingTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:18983
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

