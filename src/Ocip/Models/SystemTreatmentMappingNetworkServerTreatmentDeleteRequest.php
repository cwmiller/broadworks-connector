<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemTreatmentMappingNetworkServerTreatmentDeleteRequest
 *
 * Delete a NS Treatment mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingNetworkServerTreatmentDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName nsTreatment
     * @var string|null
     */
    private $nsTreatment = null;

    /**
     * Getter for nsTreatment
     *
     * @ElementName nsTreatment
     * @return string|null
     */
    public function getNsTreatment()
    {
        return $this->nsTreatment;
    }

    /**
     * Setter for nsTreatment
     *
     * @ElementName nsTreatment
     * @param string|null $nsTreatment
     * @return $this
     */
    public function setNsTreatment($nsTreatment)
    {
        $this->nsTreatment = $nsTreatment;
        return $this;
    }


}

