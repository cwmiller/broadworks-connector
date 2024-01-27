<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingModifyPlatformRequest22
 *
 * Modify the specified Call Recording platform.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *           becomeResellerDefault
 *           route
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"0731150ec7515df8cd710f04d8f62f66:381","type":"sequence","children":[{"id":"0731150ec7515df8cd710f04d8f62f66:386","type":"choice"}]}]
 */
class SystemCallRecordingModifyPlatformRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group 0731150ec7515df8cd710f04d8f62f66:381
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:381
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $netAddress = null;

    /**
     * @ElementName port
     * @Type int
     * @Nillable
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:381
     * @MinInclusive 1
     * @MaxInclusive 65535
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $port = null;

    /**
     * @ElementName mediaStream
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaStream
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:381
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaStream|null
     */
    protected $mediaStream = null;

    /**
     * @ElementName becomeSystemDefault
     * @Type bool
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:386
     * @var bool|null
     */
    protected $becomeSystemDefault = null;

    /**
     * @ElementName becomeResellerDefault
     * @Type string
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:386
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $becomeResellerDefault = null;

    /**
     * @ElementName transportType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:381
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol|null
     */
    protected $transportType = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:381
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * @ElementName schemaVersion
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallRecordingPlatformSchemaVersion
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:381
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallRecordingPlatformSchemaVersion|null
     */
    protected $schemaVersion = null;

    /**
     * @ElementName supportVideoRecording
     * @Type bool
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:381
     * @var bool|null
     */
    protected $supportVideoRecording = null;

    /**
     * @ElementName route
     * @Type string
     * @Nillable
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:381
     * @MinLength 1
     * @MaxLength 1024
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $route = null;

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
     * @return int|null
     */
    public function getPort()
    {
        return $this->port instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->port;
    }

    /**
     * Setter for port
     *
     * @param int|null $port
     * @return $this
     */
    public function setPort($port = null)
    {
        if ($port === null) {
            $this->port = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->port = $port;
        }
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
     * Getter for becomeSystemDefault
     *
     * @return bool
     */
    public function getBecomeSystemDefault()
    {
        return $this->becomeSystemDefault instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->becomeSystemDefault;
    }

    /**
     * Setter for becomeSystemDefault
     *
     * @param bool $becomeSystemDefault
     * @return $this
     */
    public function setBecomeSystemDefault($becomeSystemDefault)
    {
        $this->becomeSystemDefault = $becomeSystemDefault;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBecomeSystemDefault()
    {
        $this->becomeSystemDefault = null;
        return $this;
    }

    /**
     * Getter for becomeResellerDefault
     *
     * @return string
     */
    public function getBecomeResellerDefault()
    {
        return $this->becomeResellerDefault instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->becomeResellerDefault;
    }

    /**
     * Setter for becomeResellerDefault
     *
     * @param string $becomeResellerDefault
     * @return $this
     */
    public function setBecomeResellerDefault($becomeResellerDefault)
    {
        $this->becomeResellerDefault = $becomeResellerDefault;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBecomeResellerDefault()
    {
        $this->becomeResellerDefault = null;
        return $this;
    }

    /**
     * Getter for transportType
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol
     */
    public function getTransportType()
    {
        return $this->transportType instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->transportType;
    }

    /**
     * Setter for transportType
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol $transportType
     * @return $this
     */
    public function setTransportType(\CWM\BroadWorksConnector\Ocip\Models\ExtendedTransportProtocol $transportType)
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
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
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

    /**
     * Getter for schemaVersion
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallRecordingPlatformSchemaVersion
     */
    public function getSchemaVersion()
    {
        return $this->schemaVersion instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->schemaVersion;
    }

    /**
     * Setter for schemaVersion
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallRecordingPlatformSchemaVersion $schemaVersion
     * @return $this
     */
    public function setSchemaVersion(\CWM\BroadWorksConnector\Ocip\Models\CallRecordingPlatformSchemaVersion $schemaVersion)
    {
        $this->schemaVersion = $schemaVersion;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSchemaVersion()
    {
        $this->schemaVersion = null;
        return $this;
    }

    /**
     * Getter for supportVideoRecording
     *
     * @return bool
     */
    public function getSupportVideoRecording()
    {
        return $this->supportVideoRecording instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->supportVideoRecording;
    }

    /**
     * Setter for supportVideoRecording
     *
     * @param bool $supportVideoRecording
     * @return $this
     */
    public function setSupportVideoRecording($supportVideoRecording)
    {
        $this->supportVideoRecording = $supportVideoRecording;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSupportVideoRecording()
    {
        $this->supportVideoRecording = null;
        return $this;
    }

    /**
     * Getter for route
     *
     * @return string|null
     */
    public function getRoute()
    {
        return $this->route instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->route;
    }

    /**
     * Setter for route
     *
     * @param string|null $route
     * @return $this
     */
    public function setRoute($route = null)
    {
        if ($route === null) {
            $this->route = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->route = $route;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRoute()
    {
        $this->route = null;
        return $this;
    }
}

