<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetUtilizationRequest
 *
 * Get the utilization of a single DN.
 *         The response is either SystemDnGetUtilizationResponse or ErrorResponse.
 *         Replaced By: SystemDnGetUtilizationRequest14sp3
 *
 * @see SystemDnGetUtilizationResponse
 * @see ErrorResponse
 * @see SystemDnGetUtilizationRequest14sp3
 */
class SystemDnGetUtilizationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }


}

