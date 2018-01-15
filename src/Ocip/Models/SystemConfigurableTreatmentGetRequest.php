<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableTreatmentGetRequest
 *
 * Get all the attributes of a configurable treatment.
 *             The response is either a SystemConfigurableTreatmentGetResponse or
 * an ErrorResponse.
 *             Replaced By: SystemConfigurableTreatmentGetRequest16
 */
class SystemConfigurableTreatmentGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName treatmentId
     * @var string|null
     */
    private $treatmentId = null;

    /**
     * Getter for treatmentId
     *
     * @ElementName treatmentId
     * @return string|null
     */
    public function getTreatmentId()
    {
        return $this->treatmentId;
    }

    /**
     * Setter for treatmentId
     *
     * @ElementName treatmentId
     * @param string|null $treatmentId
     * @return $this
     */
    public function setTreatmentId($treatmentId)
    {
        $this->treatmentId = $treatmentId;
        return $this;
    }


}

