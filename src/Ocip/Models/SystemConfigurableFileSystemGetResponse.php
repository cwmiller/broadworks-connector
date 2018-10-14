<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponse
 *
 * Response to SystemConfigurableFileSystemGetRequest.
 *         Contains the File System parameters.
 *
 * @see SystemConfigurableFileSystemGetRequest
 */
class SystemConfigurableFileSystemGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mediaDirectory
     * @var string|null
     */
    private $mediaDirectory = null;

    /**
     * @ElementName protocolFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolFile|null
     */
    private $protocolFile = null;

    /**
     * @ElementName protocolWebDAV
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolWebDAV|null
     */
    private $protocolWebDAV = null;

    /**
     * Getter for mediaDirectory
     *
     * @ElementName mediaDirectory
     * @return string|null
     */
    public function getMediaDirectory()
    {
        return $this->mediaDirectory;
    }

    /**
     * Setter for mediaDirectory
     *
     * @ElementName mediaDirectory
     * @param string|null $mediaDirectory
     * @return $this
     */
    public function setMediaDirectory($mediaDirectory)
    {
        $this->mediaDirectory = $mediaDirectory;
        return $this;
    }

    /**
     * Getter for protocolFile
     *
     * @ElementName protocolFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolFile|null
     */
    public function getProtocolFile()
    {
        return $this->protocolFile;
    }

    /**
     * Setter for protocolFile
     *
     * @ElementName protocolFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolFile|null $protocolFile
     * @return $this
     */
    public function setProtocolFile(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolFile $protocolFile)
    {
        $this->protocolFile = $protocolFile;
        return $this;
    }

    /**
     * Getter for protocolWebDAV
     *
     * @ElementName protocolWebDAV
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolWebDAV|null
     */
    public function getProtocolWebDAV()
    {
        return $this->protocolWebDAV;
    }

    /**
     * Setter for protocolWebDAV
     *
     * @ElementName protocolWebDAV
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolWebDAV|null $protocolWebDAV
     * @return $this
     */
    public function setProtocolWebDAV(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponseProtocolWebDAV $protocolWebDAV)
    {
        $this->protocolWebDAV = $protocolWebDAV;
        return $this;
    }


}

