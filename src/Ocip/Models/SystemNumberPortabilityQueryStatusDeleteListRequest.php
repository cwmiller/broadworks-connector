<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusDeleteListRequest
 *
 * Delete a list of system number portability query statuses.
 *         The number of status entries is limited to 100.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNumberPortabilityQueryStatusDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName status
     * @var string[]
     */
    private $status = array(
        
    );

    /**
     * Getter for status
     *
     * @ElementName status
     * @return string[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Setter for status
     *
     * @ElementName status
     * @param string[] $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adder for status
     *
     * @ElementName status
     * @param string $status
     * @return $this
     */
    public function addStatus($status)
    {
        $this->status []= $status;
        return $this;
    }


}

