<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusGetResponse
 *
 * Response to the SystemNumberPortabilityQueryStatusGetRequest.
 *
 * @see SystemNumberPortabilityQueryStatusGetRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:11529","type":"sequence"}]
 */
class SystemNumberPortabilityQueryStatusGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName treatmentFileName
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:11529
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

