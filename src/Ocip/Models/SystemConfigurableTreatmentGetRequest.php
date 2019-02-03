<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableTreatmentGetRequest
 *
 * Get all the attributes of a configurable treatment.
 *                 The response is either a SystemConfigurableTreatmentGetResponse or an ErrorResponse.
 *                 Replaced By: SystemConfigurableTreatmentGetRequest16
 *
 * @see SystemConfigurableTreatmentGetResponse
 * @see ErrorResponse
 * @see SystemConfigurableTreatmentGetRequest16
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:10243","type":"sequence"}]
 */
class SystemConfigurableTreatmentGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName treatmentId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:10243
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for treatmentId
     *
     * @return string
     */
    public function getTreatmentId()
    {
        return $this->treatmentId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @param string $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentId()
    {
        $this->treatmentId = null;
        return $this;
    }


}

