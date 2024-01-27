<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingAddPlatformRequest
 *
 * Add a Call Recording platform.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         Replaced by: SystemCallRecordingAddPlatformRequest19
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see SystemCallRecordingAddPlatformRequest19
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9002","type":"sequence"}]
 */
class SystemCallRecordingAddPlatformRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:9002
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:9002
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $netAddress = null;

    /**
     * @ElementName port
     * @Type int
     * @Group 240b50f54d060859e5e275082fdf49f9:9002
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null
     */
    protected $port = null;

    /**
     * @ElementName mediaStream
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaStream
     * @Group 240b50f54d060859e5e275082fdf49f9:9002
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaStream|null
     */
    protected $mediaStream = null;

    /**
     * @ElementName transportType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     * @Group 240b50f54d060859e5e275082fdf49f9:9002
     * @var \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol|null
     */
    protected $transportType = null;

    /**
     * @ElementName description
     * @Type string
     * @Optional
     * @Group 240b50f54d060859e5e275082fdf49f9:9002
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $description = null;

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
     * Getter for netAddress
     *
     * @return string
     */
    public function getNetAddress()
    {
        return $this->netAddress instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @param string $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetAddress()
    {
        $this->netAddress = null;
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
     * Getter for mediaStream
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MediaStream
     */
    public function getMediaStream()
    {
        return $this->mediaStream instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaStream;
    }

    /**
     * Setter for mediaStream
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MediaStream $mediaStream
     * @return $this
     */
    public function setMediaStream(\CWM\BroadWorksConnector\Ocip\Models\MediaStream $mediaStream)
    {
        $this->mediaStream = $mediaStream;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaStream()
    {
        $this->mediaStream = null;
        return $this;
    }

    /**
     * Getter for transportType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     */
    public function getTransportType()
    {
        return $this->transportType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transportType;
    }

    /**
     * Setter for transportType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol $transportType
     * @return $this
     */
    public function setTransportType(\CWM\BroadWorksConnector\Ocip\Models\TransportProtocol $transportType)
    {
        $this->transportType = $transportType;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetTransportType()
    {
        $this->transportType = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }
}

