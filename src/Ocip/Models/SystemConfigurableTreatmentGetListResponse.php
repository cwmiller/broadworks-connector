<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableTreatmentGetListResponse
 *
 * Response to a SystemConfigurableTreatmentGetListRequest. Contains a table with
 * one row per treatment.
 *         The table columns are: "Treatment Id", "Description".
 */
class SystemConfigurableTreatmentGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treatmentTable
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    private $treatmentTable = null;

    /**
     * Getter for treatmentTable
     *
     * @ElementName treatmentTable
     * @return \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    public function getTreatmentTable()
    {
        return $this->treatmentTable;
    }

    /**
     * Setter for treatmentTable
     *
     * @ElementName treatmentTable
     * @param \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null $treatmentTable
     * @return $this
     */
    public function setTreatmentTable($treatmentTable)
    {
        $this->treatmentTable = $treatmentTable;
        return $this;
    }


}

