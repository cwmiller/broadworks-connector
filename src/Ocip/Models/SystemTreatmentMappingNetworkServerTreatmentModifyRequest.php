<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingNetworkServerTreatmentModifyRequest
 *
 * Modify the fields for a Network Server Treatment mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:18926","type":"sequence"}]
 */
class SystemTreatmentMappingNetworkServerTreatmentModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName nsTreatment
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18926
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    protected $nsTreatment = null;

    /**
     * @ElementName treatmentId
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:18926
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $treatmentId = null;

    /**
     * Getter for nsTreatment
     *
     * @return string
     */
    public function getNsTreatment()
    {
        return $this->nsTreatment instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->nsTreatment;
    }

    /**
     * Setter for nsTreatment
     *
     * @param string $nsTreatment
     * @return $this
     */
    public function setNsTreatment($nsTreatment)
    {
        $this->nsTreatment = $nsTreatment;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNsTreatment()
    {
        $this->nsTreatment = null;
        return $this;
    }

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

