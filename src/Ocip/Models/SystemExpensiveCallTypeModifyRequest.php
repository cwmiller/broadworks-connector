<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExpensiveCallTypeModifyRequest
 *
 * Modify an existing call indicator in the list of expensive alternate call
 * indicators.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemExpensiveCallTypeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName alternateCallIndicator
     * @var string|null
     */
    private $alternateCallIndicator = null;

    /**
     * @ElementName treatmentAudioFile
     * @var string|null
     */
    private $treatmentAudioFile = null;

    /**
     * Getter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @return string|null
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator;
    }

    /**
     * Setter for alternateCallIndicator
     *
     * @ElementName alternateCallIndicator
     * @param string|null $alternateCallIndicator
     * @return $this
     */
    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $this->alternateCallIndicator = $alternateCallIndicator;
        return $this;
    }

    /**
     * Getter for treatmentAudioFile
     *
     * @ElementName treatmentAudioFile
     * @return string|null
     */
    public function getTreatmentAudioFile()
    {
        return $this->treatmentAudioFile;
    }

    /**
     * Setter for treatmentAudioFile
     *
     * @ElementName treatmentAudioFile
     * @param string|null $treatmentAudioFile
     * @return $this
     */
    public function setTreatmentAudioFile($treatmentAudioFile)
    {
        $this->treatmentAudioFile = $treatmentAudioFile;
        return $this;
    }


}

