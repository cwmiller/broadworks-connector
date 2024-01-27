<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableTreatmentGetRequest24
 *
 * Get all the attributes of a configurable treatment.
 *         The response is either a SystemConfigurableTreatmentGetResponse24 or an ErrorResponse.
 *
 * @see SystemConfigurableTreatmentGetResponse24
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6860","type":"sequence"}]
 */
class SystemConfigurableTreatmentGetRequest24 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName treatmentId
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:6860
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

