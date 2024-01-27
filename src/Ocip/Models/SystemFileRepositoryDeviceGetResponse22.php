<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceGetResponse22
 *
 * Response to SystemFileRepositoryDeviceGetRequest22.
 *
 * @see SystemFileRepositoryDeviceGetRequest22
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10452","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:10455","type":"choice"}]}]
 */
class SystemFileRepositoryDeviceGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName rootDirectory
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:10452
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $rootDirectory = null;

    /**
     * @ElementName port
     * @Type int
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:10452
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $port = null;

    /**
     * @ElementName protocolWebDAV
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV20
     * @Group da582a1f8028404e70d260cf1f891033:10455
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV20|null
     */
    protected $protocolWebDAV = null;

    /**
     * @ElementName protocolFTP
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16
     * @Group da582a1f8028404e70d260cf1f891033:10455
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16|null
     */
    protected $protocolFTP = null;

    /**
     * @ElementName protocolSFTP
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16
     * @Group da582a1f8028404e70d260cf1f891033:10455
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16|null
     */
    protected $protocolSFTP = null;

    /**
     * @ElementName protocolFTPS
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16
     * @Group da582a1f8028404e70d260cf1f891033:10455
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16|null
     */
    protected $protocolFTPS = null;

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV20
     */
    public function getProtocolWebDAV()
    {
        return $this->protocolWebDAV instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolWebDAV;
    }

    /**
     * Setter for protocolWebDAV
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV20 $protocolWebDAV
     * @return $this
     */
    public function setProtocolWebDAV(\CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV20 $protocolWebDAV)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16
     */
    public function getProtocolFTP()
    {
        return $this->protocolFTP instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolFTP;
    }

    /**
     * Setter for protocolFTP
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16 $protocolFTP
     * @return $this
     */
    public function setProtocolFTP(\CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16 $protocolFTP)
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

    /**
     * Getter for protocolSFTP
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16
     */
    public function getProtocolSFTP()
    {
        return $this->protocolSFTP instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolSFTP;
    }

    /**
     * Setter for protocolSFTP
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16 $protocolSFTP
     * @return $this
     */
    public function setProtocolSFTP(\CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16 $protocolSFTP)
    {
        $this->protocolSFTP = $protocolSFTP;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProtocolSFTP()
    {
        $this->protocolSFTP = null;
        return $this;
    }

    /**
     * Getter for protocolFTPS
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16
     */
    public function getProtocolFTPS()
    {
        return $this->protocolFTPS instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolFTPS;
    }

    /**
     * Setter for protocolFTPS
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16 $protocolFTPS
     * @return $this
     */
    public function setProtocolFTPS(\CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16 $protocolFTPS)
    {
        $this->protocolFTPS = $protocolFTPS;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProtocolFTPS()
    {
        $this->protocolFTPS = null;
        return $this;
    }
}

