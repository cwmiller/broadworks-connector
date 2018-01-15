<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceGetResponse16
 *
 * Response to SystemFileRepositoryDeviceGetRequest16.
 */
class SystemFileRepositoryDeviceGetResponse16 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName rootDirectory
     * @var string|null
     */
    private $rootDirectory = null;

    /**
     * @ElementName port
     * @var int|null
     */
    private $port = null;

    /**
     * @ElementName protocolWebDAV
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV|null
     */
    private $protocolWebDAV = null;

    /**
     * @ElementName protocolFTP
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16|null
     */
    private $protocolFTP = null;

    /**
     * Getter for rootDirectory
     *
     * @ElementName rootDirectory
     * @return string|null
     */
    public function getRootDirectory()
    {
        return $this->rootDirectory;
    }

    /**
     * Setter for rootDirectory
     *
     * @ElementName rootDirectory
     * @param string|null $rootDirectory
     * @return $this
     */
    public function setRootDirectory($rootDirectory)
    {
        $this->rootDirectory = $rootDirectory;
        return $this;
    }

    /**
     * Getter for port
     *
     * @ElementName port
     * @return int|null
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Setter for port
     *
     * @ElementName port
     * @param int|null $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * Getter for protocolWebDAV
     *
     * @ElementName protocolWebDAV
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV|null
     */
    public function getProtocolWebDAV()
    {
        return $this->protocolWebDAV;
    }

    /**
     * Setter for protocolWebDAV
     *
     * @ElementName protocolWebDAV
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV|null $protocolWebDAV
     * @return $this
     */
    public function setProtocolWebDAV($protocolWebDAV)
    {
        $this->protocolWebDAV = $protocolWebDAV;
        return $this;
    }

    /**
     * Getter for protocolFTP
     *
     * @ElementName protocolFTP
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16|null
     */
    public function getProtocolFTP()
    {
        return $this->protocolFTP;
    }

    /**
     * Setter for protocolFTP
     *
     * @ElementName protocolFTP
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16|null $protocolFTP
     * @return $this
     */
    public function setProtocolFTP($protocolFTP)
    {
        $this->protocolFTP = $protocolFTP;
        return $this;
    }


}

