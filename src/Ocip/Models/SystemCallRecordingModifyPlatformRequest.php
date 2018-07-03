<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingModifyPlatformRequest
 *
 * Modify the specified Call Recording platform.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCallRecordingModifyPlatformRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName netAddress
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName port
     * @var int|null
     */
    private $port = null;

    /**
     * @ElementName mediaStream
     * @var string|null
     */
    private $mediaStream = null;

    /**
     * @ElementName becomeSystemDefault
     * @var bool|null
     */
    private $becomeSystemDefault = null;

    /**
     * @ElementName transportType
     * @var string|null
     */
    private $transportType = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName schemaVersion
     * @var string|null
     */
    private $schemaVersion = null;

    /**
     * @ElementName supportVideoRecording
     * @var bool|null
     */
    private $supportVideoRecording = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Getter for netAddress
     *
     * @ElementName netAddress
     * @return string|null
     */
    public function getNetAddress()
    {
        return $this->netAddress;
    }

    /**
     * Setter for netAddress
     *
     * @ElementName netAddress
     * @param string|null $netAddress
     * @return $this
     */
    public function setNetAddress($netAddress)
    {
        $this->netAddress = $netAddress;
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
     * Getter for mediaStream
     *
     * @ElementName mediaStream
     * @return string|null
     */
    public function getMediaStream()
    {
        return $this->mediaStream;
    }

    /**
     * Setter for mediaStream
     *
     * @ElementName mediaStream
     * @param string|null $mediaStream
     * @return $this
     */
    public function setMediaStream($mediaStream)
    {
        $this->mediaStream = $mediaStream;
        return $this;
    }

    /**
     * Getter for becomeSystemDefault
     *
     * @ElementName becomeSystemDefault
     * @return bool|null
     */
    public function getBecomeSystemDefault()
    {
        return $this->becomeSystemDefault;
    }

    /**
     * Setter for becomeSystemDefault
     *
     * @ElementName becomeSystemDefault
     * @param bool|null $becomeSystemDefault
     * @return $this
     */
    public function setBecomeSystemDefault($becomeSystemDefault)
    {
        $this->becomeSystemDefault = $becomeSystemDefault;
        return $this;
    }

    /**
     * Getter for transportType
     *
     * @ElementName transportType
     * @return string|null
     */
    public function getTransportType()
    {
        return $this->transportType;
    }

    /**
     * Setter for transportType
     *
     * @ElementName transportType
     * @param string|null $transportType
     * @return $this
     */
    public function setTransportType($transportType)
    {
        $this->transportType = $transportType;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for schemaVersion
     *
     * @ElementName schemaVersion
     * @return string|null
     */
    public function getSchemaVersion()
    {
        return $this->schemaVersion;
    }

    /**
     * Setter for schemaVersion
     *
     * @ElementName schemaVersion
     * @param string|null $schemaVersion
     * @return $this
     */
    public function setSchemaVersion($schemaVersion)
    {
        $this->schemaVersion = $schemaVersion;
        return $this;
    }

    /**
     * Getter for supportVideoRecording
     *
     * @ElementName supportVideoRecording
     * @return bool|null
     */
    public function getSupportVideoRecording()
    {
        return $this->supportVideoRecording;
    }

    /**
     * Setter for supportVideoRecording
     *
     * @ElementName supportVideoRecording
     * @param bool|null $supportVideoRecording
     * @return $this
     */
    public function setSupportVideoRecording($supportVideoRecording)
    {
        $this->supportVideoRecording = $supportVideoRecording;
        return $this;
    }


}

