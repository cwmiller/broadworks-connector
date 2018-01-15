<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCAPParametersGetResponse19
 *
 * Response to SystemCAPParametersGetRequest19.
 *         Contains a list of system CAP parameters.
 */
class SystemCAPParametersGetResponse19 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
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
     * @ElementName enableConnectionPing
     * @var bool|null
     */
    private $enableConnectionPing = null;

    /**
     * @ElementName connectionPingIntervalMinutes
     * @var int|null
     */
    private $connectionPingIntervalMinutes = null;

    /**
     * @ElementName CCC2ServerPort
     * @var int|null
     */
    private $CCC2ServerPort = null;

    /**
     * @ElementName CCC2MaxClientConnections
     * @var int|null
     */
    private $CCC2MaxClientConnections = null;

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

    /**
     * Getter for enableConnectionPing
     *
     * @ElementName enableConnectionPing
     * @return bool|null
     */
    public function getEnableConnectionPing()
    {
        return $this->enableConnectionPing;
    }

    /**
     * Setter for enableConnectionPing
     *
     * @ElementName enableConnectionPing
     * @param bool|null $enableConnectionPing
     * @return $this
     */
    public function setEnableConnectionPing($enableConnectionPing)
    {
        $this->enableConnectionPing = $enableConnectionPing;
        return $this;
    }

    /**
     * Getter for connectionPingIntervalMinutes
     *
     * @ElementName connectionPingIntervalMinutes
     * @return int|null
     */
    public function getConnectionPingIntervalMinutes()
    {
        return $this->connectionPingIntervalMinutes;
    }

    /**
     * Setter for connectionPingIntervalMinutes
     *
     * @ElementName connectionPingIntervalMinutes
     * @param int|null $connectionPingIntervalMinutes
     * @return $this
     */
    public function setConnectionPingIntervalMinutes($connectionPingIntervalMinutes)
    {
        $this->connectionPingIntervalMinutes = $connectionPingIntervalMinutes;
        return $this;
    }

    /**
     * Getter for CCC2ServerPort
     *
     * @ElementName CCC2ServerPort
     * @return int|null
     */
    public function getCCC2ServerPort()
    {
        return $this->CCC2ServerPort;
    }

    /**
     * Setter for CCC2ServerPort
     *
     * @ElementName CCC2ServerPort
     * @param int|null $CCC2ServerPort
     * @return $this
     */
    public function setCCC2ServerPort($CCC2ServerPort)
    {
        $this->CCC2ServerPort = $CCC2ServerPort;
        return $this;
    }

    /**
     * Getter for CCC2MaxClientConnections
     *
     * @ElementName CCC2MaxClientConnections
     * @return int|null
     */
    public function getCCC2MaxClientConnections()
    {
        return $this->CCC2MaxClientConnections;
    }

    /**
     * Setter for CCC2MaxClientConnections
     *
     * @ElementName CCC2MaxClientConnections
     * @param int|null $CCC2MaxClientConnections
     * @return $this
     */
    public function setCCC2MaxClientConnections($CCC2MaxClientConnections)
    {
        $this->CCC2MaxClientConnections = $CCC2MaxClientConnections;
        return $this;
    }


}

