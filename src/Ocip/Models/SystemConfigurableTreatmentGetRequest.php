<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableTreatmentGetRequest
 *
 * Get all the attributes of a configurable treatment.
 *             The response is either a SystemConfigurableTreatmentGetResponse or an ErrorResponse.
 *             Replaced By: SystemConfigurableTreatmentGetRequest16
 *
 * @see SystemConfigurableTreatmentGetResponse
 * @see ErrorResponse
 * @see SystemConfigurableTreatmentGetRequest16
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:25706","type":"sequence"}]
 */
class SystemConfigurableTreatmentGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName treatmentId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:25706
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $treatmentId = null;

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

