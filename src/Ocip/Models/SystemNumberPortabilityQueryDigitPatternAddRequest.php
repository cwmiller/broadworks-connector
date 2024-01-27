<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternAddRequest
 *
 * Request to add a System Number Portability Query Status Digit Pattern mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13211","type":"sequence"}]
 */
class SystemNumberPortabilityQueryDigitPatternAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName digitPattern
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:13211
     * @MinLength 1
     * @MaxLength 160
     * @var string|null
     */
    protected $digitPattern = null;

    /**
     * @ElementName status
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:13211
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $status = null;

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

