<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableTreatmentGetRequest16
 *
 * Get all the attributes of a configurable treatment.
 *         The response is either a SystemConfigurableTreatmentGetResponse16 or an ErrorResponse.
 *
 * @see SystemConfigurableTreatmentGetResponse16
 * @see ErrorResponse
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9780","type":"sequence"}]
 */
class SystemConfigurableTreatmentGetRequest16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName treatmentId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:9780
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

