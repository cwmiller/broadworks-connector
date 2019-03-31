<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingNetworkServerTreatmentDeleteRequest
 *
 * Delete a NS Treatment mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:17806","type":"sequence"}]
 */
class SystemTreatmentMappingNetworkServerTreatmentDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName nsTreatment
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:17806
     * @MinLength 1
     * @MaxLength 8
     * @var string|null
     */
    private $nsTreatment = null;

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


}

