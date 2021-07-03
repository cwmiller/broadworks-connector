<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternGetResponse
 *
 * Response to the SystemNumberPortabilityQueryDigitPatternGetRequest.
 *
 * @see SystemNumberPortabilityQueryDigitPatternGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:13124","type":"sequence"}]
 */
class SystemNumberPortabilityQueryDigitPatternGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName status
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:13124
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $status = null;

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

