<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternModifyRequest
 *
 * Request to modify a System Number Portability Status Digit Pattern mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNumberPortabilityQueryDigitPatternModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName digitPattern
     * @var string|null
     */
    private $digitPattern = null;

    /**
     * @ElementName newDigitPattern
     * @var string|null
     */
    private $newDigitPattern = null;

    /**
     * @ElementName status
     * @var string|null
     */
    private $status = null;

    /**
     * Getter for digitPattern
     *
     * @ElementName digitPattern
     * @return string|null
     */
    public function getDigitPattern()
    {
        return $this->digitPattern;
    }

    /**
     * Setter for digitPattern
     *
     * @ElementName digitPattern
     * @param string|null $digitPattern
     * @return $this
     */
    public function setDigitPattern($digitPattern)
    {
        $this->digitPattern = $digitPattern;
        return $this;
    }

    /**
     * Getter for newDigitPattern
     *
     * @ElementName newDigitPattern
     * @return string|null
     */
    public function getNewDigitPattern()
    {
        return $this->newDigitPattern;
    }

    /**
     * Setter for newDigitPattern
     *
     * @ElementName newDigitPattern
     * @param string|null $newDigitPattern
     * @return $this
     */
    public function setNewDigitPattern($newDigitPattern)
    {
        $this->newDigitPattern = $newDigitPattern;
        return $this;
    }

    /**
     * Getter for status
     *
     * @ElementName status
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Setter for status
     *
     * @ElementName status
     * @param string|null $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


}

