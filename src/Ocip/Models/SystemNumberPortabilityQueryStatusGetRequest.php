<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusGetRequest
 *
 * Get information for a system Number Portability Query Status.
 *         The response is either SystemNumberPortabilityQueryStatusGetResponse or
 * ErrorResponse.
 */
class SystemNumberPortabilityQueryStatusGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

