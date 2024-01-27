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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10028","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:10030","type":"choice"}]}]
 */
class SystemExpensiveCallTypeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName alternateCallIndicator
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:10028
     * @MinLength 1
     * @MaxLength 64
     * @var string|null
     */
    protected $alternateCallIndicator = null;

    /**
     * @ElementName treatmentAudioFile
     * @Type string
     * @Nillable
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:10030
     * @MinLength 1
     * @MaxLength 256
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $treatmentAudioFile = null;

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

