<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusGetRequest
 *
 * Get information for a system Number Portability Query Status.
 *         The response is either SystemNumberPortabilityQueryStatusGetResponse or ErrorResponse.
 *
 * @see SystemNumberPortabilityQueryStatusGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:12142","type":"sequence"}]
 */
class SystemNumberPortabilityQueryStatusGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName status
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:12142
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

