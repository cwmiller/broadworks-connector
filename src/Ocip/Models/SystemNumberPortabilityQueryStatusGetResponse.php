<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusGetResponse
 *
 * Response to the SystemNumberPortabilityQueryStatusGetRequest.
 *
 * @see SystemNumberPortabilityQueryStatusGetRequest
 */
class SystemNumberPortabilityQueryStatusGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treatmentFileName
     * @var string|null
     */
    private $treatmentFileName = null;

    /**
     * Getter for treatmentFileName
     *
     * @ElementName treatmentFileName
     * @return string|null
     */
    public function getTreatmentFileName()
    {
        return $this->treatmentFileName;
    }

    /**
     * Setter for treatmentFileName
     *
     * @ElementName treatmentFileName
     * @param string|null $treatmentFileName
     * @return $this
     */
    public function setTreatmentFileName($treatmentFileName)
    {
        $this->treatmentFileName = $treatmentFileName;
        return $this;
    }


}

