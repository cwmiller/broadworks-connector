<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponse23
 *
 * Response to SystemConfigurableFileSystemGetRequest23.
 *         Contains the File System parameters.
 *
 * @see SystemConfigurableFileSystemGetRequest23
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9744","type":"sequence","children":[{"id":"240b50f54d060859e5e275082fdf49f9:9746","type":"choice"}]}]
 */
class SystemConfigurableFileSystemGetResponse23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mediaDirectory
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:9744
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $mediaDirectory = null;

    /**
     * @ElementName protocolFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23ProtocolFile
     * @Group 240b50f54d060859e5e275082fdf49f9:9746
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23ProtocolFile|null
     */
    protected $protocolFile = null;

    /**
     * @ElementName protocolWebDAV
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23ProtocolWebDAV
     * @Group 240b50f54d060859e5e275082fdf49f9:9746
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23ProtocolWebDAV|null
     */
    protected $protocolWebDAV = null;

    /**
     * Getter for mediaDirectory
     *
     * @return string
     */
    public function getMediaDirectory()
    {
        return $this->mediaDirectory instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaDirectory;
    }

    /**
     * Setter for mediaDirectory
     *
     * @param string $mediaDirectory
     * @return $this
     */
    public function setMediaDirectory($mediaDirectory)
    {
        $this->mediaDirectory = $mediaDirectory;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaDirectory()
    {
        $this->mediaDirectory = null;
        return $this;
    }

    /**
     * Getter for protocolFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23ProtocolFile
     */
    public function getProtocolFile()
    {
        return $this->protocolFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolFile;
    }

    /**
     * Setter for protocolFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23ProtocolFile $protocolFile
     * @return $this
     */
    public function setProtocolFile(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23ProtocolFile $protocolFile)
    {
        $this->protocolFile = $protocolFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetProtocolFile()
    {
        $this->protocolFile = null;
        return $this;
    }

    /**
     * Getter for protocolWebDAV
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23ProtocolWebDAV
     */
    public function getProtocolWebDAV()
    {
        return $this->protocolWebDAV instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolWebDAV;
    }

    /**
     * Setter for protocolWebDAV
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23ProtocolWebDAV $protocolWebDAV
     * @return $this
     */
    public function setProtocolWebDAV(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23ProtocolWebDAV $protocolWebDAV)
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
}

