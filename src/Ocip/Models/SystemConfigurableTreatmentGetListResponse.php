<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableTreatmentGetListResponse
 *
 * Response to a SystemConfigurableTreatmentGetListRequest. Contains a table with one row per treatment.
 *         The table columns are: "Treatment Id", "Description".
 *
 * @see SystemConfigurableTreatmentGetListRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6844","type":"sequence"}]
 */
class SystemConfigurableTreatmentGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treatmentTable
     * @Type \CWM\BroadWorksConnector\Ocip\Models\C\OCITable
     * @Group da582a1f8028404e70d260cf1f891033:6844
     * @var \CWM\BroadWorksConnector\Ocip\Models\C\OCITable|null
     */
    protected $treatmentTable = null;

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

