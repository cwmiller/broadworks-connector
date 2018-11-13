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
     * @Type string
     * @var string|null
     */
    private $treatmentFileName = null;

    /**
     * Getter for treatmentFileName
     *
     * @return string
     */
    public function getTreatmentFileName()
    {
        return $this->treatmentFileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentFileName;
    }

    /**
     * Setter for treatmentFileName
     *
     * @param string $treatmentFileName
     * @return $this
     */
    public function setTreatmentFileName($treatmentFileName)
    {
        $this->treatmentFileName = $treatmentFileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentFileName()
    {
        $this->treatmentFileName = null;
        return $this;
    }


}

