<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemServiceControlParametersGetResponse
 *
 * Response to SystemServiceControlParametersGetListRequest.
 *         Contains a list of system Service Control parameters.
 */
class SystemServiceControlParametersGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName serverPort
     * @var int|null
     */
    private $serverPort = null;

    /**
     * @ElementName maxClientConnections
     * @var int|null
     */
    private $maxClientConnections = null;

    /**
     * Getter for serverPort
     *
     * @ElementName serverPort
     * @return int|null
     */
    public function getServerPort()
    {
        return $this->serverPort;
    }

    /**
     * Setter for serverPort
     *
     * @ElementName serverPort
     * @param int|null $serverPort
     * @return $this
     */
    public function setServerPort($serverPort)
    {
        $this->serverPort = $serverPort;
        return $this;
    }

    /**
     * Getter for maxClientConnections
     *
     * @ElementName maxClientConnections
     * @return int|null
     */
    public function getMaxClientConnections()
    {
        return $this->maxClientConnections;
    }

    /**
     * Setter for maxClientConnections
     *
     * @ElementName maxClientConnections
     * @param int|null $maxClientConnections
     * @return $this
     */
    public function setMaxClientConnections($maxClientConnections)
    {
        $this->maxClientConnections = $maxClientConnections;
        return $this;
    }


}

