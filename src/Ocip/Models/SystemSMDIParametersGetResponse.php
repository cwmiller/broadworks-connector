<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemSMDIParametersGetResponse
 *
 * Response to SystemSMDIParametersGetListRequest.
 *         Contains a list of system SMDI parameters.
 */
class SystemSMDIParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableSMDI
     * @var bool|null
     */
    private $enableSMDI = null;

    /**
     * @ElementName listeningPort
     * @var int|null
     */
    private $listeningPort = null;

    /**
     * @ElementName maxConnections
     * @var int|null
     */
    private $maxConnections = null;

    /**
     * Getter for enableSMDI
     *
     * @ElementName enableSMDI
     * @return bool|null
     */
    public function getEnableSMDI()
    {
        return $this->enableSMDI;
    }

    /**
     * Setter for enableSMDI
     *
     * @ElementName enableSMDI
     * @param bool|null $enableSMDI
     * @return $this
     */
    public function setEnableSMDI($enableSMDI)
    {
        $this->enableSMDI = $enableSMDI;
        return $this;
    }

    /**
     * Getter for listeningPort
     *
     * @ElementName listeningPort
     * @return int|null
     */
    public function getListeningPort()
    {
        return $this->listeningPort;
    }

    /**
     * Setter for listeningPort
     *
     * @ElementName listeningPort
     * @param int|null $listeningPort
     * @return $this
     */
    public function setListeningPort($listeningPort)
    {
        $this->listeningPort = $listeningPort;
        return $this;
    }

    /**
     * Getter for maxConnections
     *
     * @ElementName maxConnections
     * @return int|null
     */
    public function getMaxConnections()
    {
        return $this->maxConnections;
    }

    /**
     * Setter for maxConnections
     *
     * @ElementName maxConnections
     * @param int|null $maxConnections
     * @return $this
     */
    public function setMaxConnections($maxConnections)
    {
        $this->maxConnections = $maxConnections;
        return $this;
    }


}

