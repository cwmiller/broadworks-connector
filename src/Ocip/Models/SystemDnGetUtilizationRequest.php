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
 * @Groups [{"id":"1a79c7896cb04feac6eff47a5321756e:22027","type":"sequence"}]
 */
class SystemDnGetUtilizationRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName phoneNumber
     * @Type string
     * @Group 1a79c7896cb04feac6eff47a5321756e:22027
     * @var string|null
     */
    private $phoneNumber = null;

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }


}

