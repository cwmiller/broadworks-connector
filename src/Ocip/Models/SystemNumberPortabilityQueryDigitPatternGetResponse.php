<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternGetResponse
 *
 * Response to the SystemNumberPortabilityQueryDigitPatternGetRequest.
 *
 * @see SystemNumberPortabilityQueryDigitPatternGetRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13294","type":"sequence"}]
 */
class SystemNumberPortabilityQueryDigitPatternGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName status
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:13294
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $status = null;

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

