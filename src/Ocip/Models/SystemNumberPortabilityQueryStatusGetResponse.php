<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusGetResponse
 *
 * Response to the SystemNumberPortabilityQueryStatusGetRequest.
 *
 * @see SystemNumberPortabilityQueryStatusGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13454","type":"sequence"}]
 */
class SystemNumberPortabilityQueryStatusGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName treatmentFileName
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:13454
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $treatmentFileName = null;

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

