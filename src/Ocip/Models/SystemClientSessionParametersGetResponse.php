<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClientSessionParametersGetResponse
 *
 * Response to SystemClientSessionParametersGetRequest.
 *         Contains a list of system Client Session (web and CLI) parameters.
 *
 * @see SystemClientSessionParametersGetRequest
 */
class SystemClientSessionParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableInactivityTimeout
     * @var bool|null
     */
    private $enableInactivityTimeout = null;

    /**
     * @ElementName inactivityTimeoutMinutes
     * @var int|null
     */
    private $inactivityTimeoutMinutes = null;

    /**
     * Getter for enableInactivityTimeout
     *
     * @ElementName enableInactivityTimeout
     * @return bool|null
     */
    public function getEnableInactivityTimeout()
    {
        return $this->enableInactivityTimeout;
    }

    /**
     * Setter for enableInactivityTimeout
     *
     * @ElementName enableInactivityTimeout
     * @param bool|null $enableInactivityTimeout
     * @return $this
     */
    public function setEnableInactivityTimeout($enableInactivityTimeout)
    {
        $this->enableInactivityTimeout = $enableInactivityTimeout;
        return $this;
    }

    /**
     * Getter for inactivityTimeoutMinutes
     *
     * @ElementName inactivityTimeoutMinutes
     * @return int|null
     */
    public function getInactivityTimeoutMinutes()
    {
        return $this->inactivityTimeoutMinutes;
    }

    /**
     * Setter for inactivityTimeoutMinutes
     *
     * @ElementName inactivityTimeoutMinutes
     * @param int|null $inactivityTimeoutMinutes
     * @return $this
     */
    public function setInactivityTimeoutMinutes($inactivityTimeoutMinutes)
    {
        $this->inactivityTimeoutMinutes = $inactivityTimeoutMinutes;
        return $this;
    }


}

