<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternModifyRequest
 *
 * Request to modify a System Number Portability Status Digit Pattern mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11576","type":"sequence"}]
 */
class SystemNumberPortabilityQueryDigitPatternModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName digitPattern
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11576
     * @var string|null
     */
    private $digitPattern = null;

    /**
     * @ElementName newDigitPattern
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11576
     * @var string|null
     */
    private $newDigitPattern = null;

    /**
     * @ElementName status
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11576
     * @var string|null
     */
    private $status = null;

    /**
     * Getter for digitPattern
     *
     * @return string
     */
    public function getDigitPattern()
    {
        return $this->digitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->digitPattern;
    }

    /**
     * Setter for digitPattern
     *
     * @param string $digitPattern
     * @return $this
     */
    public function setDigitPattern($digitPattern)
    {
        $this->digitPattern = $digitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDigitPattern()
    {
        $this->digitPattern = null;
        return $this;
    }

    /**
     * Getter for newDigitPattern
     *
     * @return string
     */
    public function getNewDigitPattern()
    {
        return $this->newDigitPattern instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newDigitPattern;
    }

    /**
     * Setter for newDigitPattern
     *
     * @param string $newDigitPattern
     * @return $this
     */
    public function setNewDigitPattern($newDigitPattern)
    {
        $this->newDigitPattern = $newDigitPattern;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewDigitPattern()
    {
        $this->newDigitPattern = null;
        return $this;
    }

    /**
     * Getter for status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->status;
    }

    /**
     * Setter for status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetStatus()
    {
        $this->status = null;
        return $this;
    }


}

