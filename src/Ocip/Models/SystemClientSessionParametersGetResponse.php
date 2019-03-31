<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemClientSessionParametersGetResponse
 *
 * Response to SystemClientSessionParametersGetRequest.
 *         Contains a list of system Client Session (web and CLI) parameters.
 *
 * @see SystemClientSessionParametersGetRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:5101","type":"sequence"}]
 */
class SystemClientSessionParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableInactivityTimeout
     * @Type bool
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:5101
     * @var bool|null
     */
    private $enableInactivityTimeout = null;

    /**
     * @ElementName inactivityTimeoutMinutes
     * @Type int
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:5101
     * @MinInclusive 10
     * @MaxInclusive 360
     * @var int|null
     */
    private $inactivityTimeoutMinutes = null;

    /**
     * Getter for enableInactivityTimeout
     *
     * @return bool
     */
    public function getEnableInactivityTimeout()
    {
        return $this->enableInactivityTimeout instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableInactivityTimeout;
    }

    /**
     * Setter for enableInactivityTimeout
     *
     * @param bool $enableInactivityTimeout
     * @return $this
     */
    public function setEnableInactivityTimeout($enableInactivityTimeout)
    {
        $this->enableInactivityTimeout = $enableInactivityTimeout;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableInactivityTimeout()
    {
        $this->enableInactivityTimeout = null;
        return $this;
    }

    /**
     * Getter for inactivityTimeoutMinutes
     *
     * @return int
     */
    public function getInactivityTimeoutMinutes()
    {
        return $this->inactivityTimeoutMinutes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->inactivityTimeoutMinutes;
    }

    /**
     * Setter for inactivityTimeoutMinutes
     *
     * @param int $inactivityTimeoutMinutes
     * @return $this
     */
    public function setInactivityTimeoutMinutes($inactivityTimeoutMinutes)
    {
        $this->inactivityTimeoutMinutes = $inactivityTimeoutMinutes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInactivityTimeoutMinutes()
    {
        $this->inactivityTimeoutMinutes = null;
        return $this;
    }


}

