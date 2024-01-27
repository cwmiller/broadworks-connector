<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceGetResponse
 *
 * Response to SystemFileRepositoryDeviceGetRequest.
 *
 * @see SystemFileRepositoryDeviceGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:27322","type":"sequence","children":[{"id":"d8f04177e438f303b41c211e518706bf:27325","type":"choice"}]}]
 */
class SystemFileRepositoryDeviceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName rootDirectory
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:27322
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $rootDirectory = null;

    /**
     * @ElementName port
     * @Type int
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:27322
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $port = null;

    /**
     * @ElementName protocolWebDAV
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV
     * @Group d8f04177e438f303b41c211e518706bf:27325
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV|null
     */
    protected $protocolWebDAV = null;

    /**
     * @ElementName protocolFTP
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP
     * @Group d8f04177e438f303b41c211e518706bf:27325
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP|null
     */
    protected $protocolFTP = null;

    /**
     * Getter for rootDirectory
     *
     * @return string
     */
    public function getRootDirectory()
    {
        return $this->rootDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->rootDirectory;
    }

    /**
     * Setter for rootDirectory
     *
     * @param string $rootDirectory
     * @return $this
     */
    public function setRootDirectory($rootDirectory)
    {
        $this->rootDirectory = $rootDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRootDirectory()
    {
        $this->rootDirectory = null;
        return $this;
    }

    /**
     * Getter for port
     *
     * @return int
     */
    public function getPort()
    {
        return $this->port instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->port;
    }

    /**
     * Setter for port
     *
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPort()
    {
        $this->port = null;
        return $this;
    }

    /**
     * Getter for protocolWebDAV
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV
     */
    public function getProtocolWebDAV()
    {
        return $this->protocolWebDAV instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolWebDAV;
    }

    /**
     * Setter for protocolWebDAV
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV $protocolWebDAV
     * @return $this
     */
    public function setProtocolWebDAV(\CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV $protocolWebDAV)
    {
        $this->protocolWebDAV = $protocolWebDAV;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProtocolWebDAV()
    {
        $this->protocolWebDAV = null;
        return $this;
    }

    /**
     * Getter for protocolFTP
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP
     */
    public function getProtocolFTP()
    {
        return $this->protocolFTP instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolFTP;
    }

    /**
     * Setter for protocolFTP
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP $protocolFTP
     * @return $this
     */
    public function setProtocolFTP(\CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP $protocolFTP)
    {
        $this->protocolFTP = $protocolFTP;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProtocolFTP()
    {
        $this->protocolFTP = null;
        return $this;
    }
}

