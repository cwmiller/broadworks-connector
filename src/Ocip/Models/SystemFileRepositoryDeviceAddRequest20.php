<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceAddRequest20
 *
 * Add a new file repository.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8841","type":"sequence","children":[{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8845","type":"choice"}]}]
 */
class SystemFileRepositoryDeviceAddRequest20 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8841
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName rootDirectory
     * @Type string
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8841
     * @var string|null
     */
    private $rootDirectory = null;

    /**
     * @ElementName port
     * @Type int
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8841
     * @var int|null
     */
    private $port = null;

    /**
     * @ElementName protocolWebDAV
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV20
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8845
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolWebDAV20|null
     */
    private $protocolWebDAV = null;

    /**
     * @ElementName protocolFTP
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8845
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16|null
     */
    private $protocolFTP = null;

    /**
     * @ElementName protocolSFTP
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8845
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16|null
     */
    private $protocolSFTP = null;

    /**
     * @ElementName protocolFTPS
     * @Type \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8845
     * @var \CWM\BroadWorksConnector\Ocip\Models\FileRepositoryProtocolFTP16|null
     */
    private $protocolFTPS = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }

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

