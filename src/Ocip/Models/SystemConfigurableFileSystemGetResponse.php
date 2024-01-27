<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponse
 *
 * Response to SystemConfigurableFileSystemGetRequest.
 *         Regardless of element password being there in the response, the request is never going
 *         to return the password in response.
 *         Contains the File System parameters.
 *
 * @see SystemConfigurableFileSystemGetRequest
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9666","type":"sequence","children":[{"id":"240b50f54d060859e5e275082fdf49f9:9668","type":"choice"}]}]
 */
class SystemConfigurableFileSystemGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mediaDirectory
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:9666
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $mediaDirectory = null;

    /**
     * @ElementName protocolFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolFile
     * @Group 240b50f54d060859e5e275082fdf49f9:9668
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolFile|null
     */
    protected $protocolFile = null;

    /**
     * @ElementName protocolWebDAV
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolWebDAV
     * @Group 240b50f54d060859e5e275082fdf49f9:9668
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolWebDAV|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolFile
     */
    public function getProtocolFile()
    {
        return $this->protocolFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolFile;
    }

    /**
     * Setter for protocolFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolFile $protocolFile
     * @return $this
     */
    public function setProtocolFile(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolFile $protocolFile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolWebDAV
     */
    public function getProtocolWebDAV()
    {
        return $this->protocolWebDAV instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolWebDAV;
    }

    /**
     * Setter for protocolWebDAV
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolWebDAV $protocolWebDAV
     * @return $this
     */
    public function setProtocolWebDAV(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolWebDAV $protocolWebDAV)
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

