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
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:16651","type":"sequence"}]
 */
class SystemTreatmentMappingNetworkServerTreatmentDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName nsTreatment
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:16651
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

