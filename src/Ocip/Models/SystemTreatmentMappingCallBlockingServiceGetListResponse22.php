<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingCallBlockingServiceGetListResponse22
 *
 * Response to a SystemTreatmentMappingCallBlockingServiceGetListRequest22. 
 *         Contains a table with one row per mapping.
 *         The table columns are: "Service", "Treatment Id".
 *         The Service column list the service or policy which is using
 * corresponding treatment, and can be OCP, EOCP, ICP, ACR, SCR, SCA, AAC,
 * Intercept, PTT, CommBarring, SAC, IncomingCommBarring, HierCommBarring,
 * IncomHierCommBarring, BWMobilityDenyOrig, BWMobilityDenyTerm, ETRouteExhaust,
 * CallPark, NumberPortability, ConcTerminatingAlertingPolicy.
 *
 * @see SystemTreatmentMappingCallBlockingServiceGetListRequest22
 */
class SystemTreatmentMappingCallBlockingServiceGetListResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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

