<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryDigitPatternGetResponse
 *
 * Response to the SystemNumberPortabilityQueryDigitPatternGetRequest.
 *
 * @see SystemNumberPortabilityQueryDigitPatternGetRequest
 */
class SystemNumberPortabilityQueryDigitPatternGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName status
     * @var string|null
     */
    private $status = null;

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

