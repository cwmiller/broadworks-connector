<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetUtilizationRequest14sp3
 *
 * Get the utilization of a single DN.
 *         The response is either
 *         SystemDnGetUtilizationResponse14sp3 or ErrorResponse.
 */
class SystemDnGetUtilizationRequest14sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

