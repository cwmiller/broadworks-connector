<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableTreatmentGetListResponse
 *
 * Response to a SystemConfigurableTreatmentGetListRequest. Contains a table with one row per treatment.
 *         The table columns are: "Treatment Id", "Description".
 *
 * @see SystemConfigurableTreatmentGetListRequest
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:6003","type":"sequence"}]
 */
class SystemConfigurableTreatmentGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treatmentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group 610f84d3e188f0477c3ae1a82ee036da:6003
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $treatmentTable = null;

    /**
     * Getter for treatmentTable
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     */
    public function getTreatmentTable()
    {
        return $this->treatmentTable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentTable;
    }

    /**
     * Setter for treatmentTable
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable $treatmentTable
     * @return $this
     */
    public function setTreatmentTable(\CWM\BroadWorksConnector\Ocip\Models\C\OCITable $treatmentTable)
    {
        $this->treatmentTable = $treatmentTable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentTable()
    {
        $this->treatmentTable = null;
        return $this;
    }


}

