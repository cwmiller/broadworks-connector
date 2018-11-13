<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIParametersGetResponse
 *
 * Response to SystemSMDIParametersGetListRequest.
 *         Contains a list of system SMDI parameters.
 *
 * @see SystemSMDIParametersGetListRequest
 */
class SystemSMDIParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableSMDI
     * @Type bool
     * @var bool|null
     */
    private $enableSMDI = null;

    /**
     * @ElementName listeningPort
     * @Type int
     * @var int|null
     */
    private $listeningPort = null;

    /**
     * @ElementName maxConnections
     * @Type int
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

