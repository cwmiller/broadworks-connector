<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExpensiveCallTypeAddRequest
 *
 * Add an alternate call indicator to the list of expensive alternate call indicators.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:8256","type":"sequence"}]
 */
class SystemExpensiveCallTypeAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName alternateCallIndicator
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:8256
     * @var string|null
     */
    private $alternateCallIndicator = null;

    /**
     * @ElementName treatmentAudioFile
     * @Type string
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:8256
     * @var string|null
     */
    private $treatmentAudioFile = null;

    /**
     * Getter for alternateCallIndicator
     *
     * @return string
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @param string $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlternateCallIndicator()
    {
        $this->alternateCallIndicator = null;
        return $this;
    }

    /**
     * Getter for treatmentAudioFile
     *
     * @return string
     */
    public function getTreatmentAudioFile()
    {
        return $this->treatmentAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentAudioFile;
    }

    /**
     * Setter for treatmentAudioFile
     *
     * @param string $treatmentAudioFile
     * @return $this
     */
    public function setTreatmentAudioFile($treatmentAudioFile)
    {
        $this->treatmentAudioFile = $treatmentAudioFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTreatmentAudioFile()
    {
        $this->treatmentAudioFile = null;
        return $this;
    }


}

