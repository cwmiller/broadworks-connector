<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryStatusDeleteListRequest
 *
 * Delete a list of system number portability query statuses.
 *         The number of status entries is limited to 100.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemNumberPortabilityQueryStatusDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName status
     * @Type string
     * @Array
     * @var string[]
     */
    private $status = array(
        
    );

    /**
     * Getter for status
     *
     * @return string[]
     */
    public function getStatus()
    {
        return $this->status instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->status;
    }

    /**
     * Setter for status
     *
     * @param string[] $status
     * @return $this
     */
    public function setStatus(array $status)
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

    /**
     * Adder for status
     *
     * @param string $status
     * @return $this
     */
    public function addStatus(string $status)
    {
        $this->status[] = $status;
        return $this;
    }


}

