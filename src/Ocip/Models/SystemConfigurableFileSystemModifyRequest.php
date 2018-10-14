<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemModifyRequest
 *
 * Request to modify File System parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemConfigurableFileSystemModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName mediaDirectory
     * @var string|null
     */
    private $mediaDirectory = null;

    /**
     * @ElementName protocolFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolFile|null
     */
    private $protocolFile = null;

    /**
     * @ElementName protocolWebDAV
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolWebDAV|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolFile|null
     */
    public function getProtocolFile()
    {
        return $this->protocolFile;
    }

    /**
     * Setter for protocolFile
     *
     * @ElementName protocolFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolFile|null $protocolFile
     * @return $this
     */
    public function setProtocolFile(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolFile $protocolFile)
    {
        $this->protocolFile = $protocolFile;
        return $this;
    }

    /**
     * Getter for protocolWebDAV
     *
     * @ElementName protocolWebDAV
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolWebDAV|null
     */
    public function getProtocolWebDAV()
    {
        return $this->protocolWebDAV;
    }

    /**
     * Setter for protocolWebDAV
     *
     * @ElementName protocolWebDAV
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolWebDAV|null $protocolWebDAV
     * @return $this
     */
    public function setProtocolWebDAV(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolWebDAV $protocolWebDAV)
    {
        $this->protocolWebDAV = $protocolWebDAV;
        return $this;
    }


}

