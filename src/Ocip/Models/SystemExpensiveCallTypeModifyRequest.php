<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExpensiveCallTypeModifyRequest
 *
 * Modify an existing call indicator in the list of expensive alternate call indicators.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8881","type":"sequence","children":[{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8883","type":"choice"}]}]
 */
class SystemExpensiveCallTypeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName alternateCallIndicator
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8881
     * @var string|null
     */
    private $alternateCallIndicator = null;

    /**
     * @ElementName treatmentAudioFile
     * @Type string
     * @Nillable
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8883
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @return string|null
     */
    public function getTreatmentAudioFile()
    {
        return $this->treatmentAudioFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->treatmentAudioFile;
    }

    /**
     * Setter for treatmentAudioFile
     *
     * @param string|null $treatmentAudioFile
     * @return $this
     */
    public function setTreatmentAudioFile($treatmentAudioFile = null)
    {
        if ($treatmentAudioFile === null) {
            $this->treatmentAudioFile = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->treatmentAudioFile = $treatmentAudioFile;
        }
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

