<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIParametersModifyRequest
 *
 * Request to modify SMDI system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:16001","type":"sequence"}]
 */
class SystemSMDIParametersModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName enableSMDI
     * @Type bool
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16001
     * @var bool|null
     */
    private $enableSMDI = null;

    /**
     * @ElementName listeningPort
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16001
     * @var int|null
     */
    private $listeningPort = null;

    /**
     * @ElementName maxConnections
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:16001
     * @var int|null
     */
    private $maxConnections = null;

    /**
     * Getter for enableSMDI
     *
     * @return bool
     */
    public function getEnableSMDI()
    {
        return $this->enableSMDI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableSMDI;
    }

    /**
     * Setter for enableSMDI
     *
     * @param bool $enableSMDI
     * @return $this
     */
    public function setEnableSMDI($enableSMDI)
    {
        $this->enableSMDI = $enableSMDI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableSMDI()
    {
        $this->enableSMDI = null;
        return $this;
    }

    /**
     * Getter for listeningPort
     *
     * @return int
     */
    public function getListeningPort()
    {
        return $this->listeningPort instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listeningPort;
    }

    /**
     * Setter for listeningPort
     *
     * @param int $listeningPort
     * @return $this
     */
    public function setListeningPort($listeningPort)
    {
        $this->listeningPort = $listeningPort;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListeningPort()
    {
        $this->listeningPort = null;
        return $this;
    }

    /**
     * Getter for maxConnections
     *
     * @return int
     */
    public function getMaxConnections()
    {
        return $this->maxConnections instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->maxConnections;
    }

    /**
     * Setter for maxConnections
     *
     * @param int $maxConnections
     * @return $this
     */
    public function setMaxConnections($maxConnections)
    {
        $this->maxConnections = $maxConnections;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMaxConnections()
    {
        $this->maxConnections = null;
        return $this;
    }


}

