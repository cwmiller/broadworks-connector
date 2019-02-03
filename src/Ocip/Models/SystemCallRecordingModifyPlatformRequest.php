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
 * @Groups [{"id":"9741e074fbfeb4c7312bfa4dfbaee3d3:312","type":"sequence"}]
 */
class SystemCallRecordingModifyPlatformRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:312
     * @var string|null
     */
    private $name = null;

    /**
     * @ElementName netAddress
     * @Type string
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:312
     * @var string|null
     */
    private $netAddress = null;

    /**
     * @ElementName port
     * @Type int
     * @Nillable
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:312
     * @var int|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $port = null;

    /**
     * @ElementName mediaStream
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MediaStream
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:312
     * @var \CWM\BroadWorksConnector\Ocip\Models\MediaStream|null
     */
    private $mediaStream = null;

    /**
     * @ElementName becomeSystemDefault
     * @Type bool
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:312
     * @var bool|null
     */
    private $becomeSystemDefault = null;

    /**
     * @ElementName transportType
     * @Type \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:312
     * @var \CWM\BroadWorksConnector\Ocip\Models\TransportProtocol|null
     */
    private $transportType = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:312
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName schemaVersion
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallRecordingPlatformSchemaVersion
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:312
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallRecordingPlatformSchemaVersion|null
     */
    private $schemaVersion = null;

    /**
     * @ElementName supportVideoRecording
     * @Type bool
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:312
     * @var bool|null
     */
    private $supportVideoRecording = null;

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


}

