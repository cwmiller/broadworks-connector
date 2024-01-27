<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemModifyRequest
 *
 * Request to modify File System parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode and ignored in XS data mode:
 *             protocolFile-secure
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6739","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:6741","type":"choice","optional":true}]}]
 */
class SystemConfigurableFileSystemModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName mediaDirectory
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:6739
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $mediaDirectory = null;

    /**
     * @ElementName protocolFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolFile
     * @Group da582a1f8028404e70d260cf1f891033:6741
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolFile|null
     */
    protected $protocolFile = null;

    /**
     * @ElementName protocolWebDAV
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolWebDAV
     * @Group da582a1f8028404e70d260cf1f891033:6741
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolWebDAV|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolFile
     */
    public function getProtocolFile()
    {
        return $this->protocolFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolFile;
    }

    /**
     * Setter for protocolFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolFile $protocolFile
     * @return $this
     */
    public function setProtocolFile(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolFile $protocolFile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolWebDAV
     */
    public function getProtocolWebDAV()
    {
        return $this->protocolWebDAV instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolWebDAV;
    }

    /**
     * Setter for protocolWebDAV
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolWebDAV $protocolWebDAV
     * @return $this
     */
    public function setProtocolWebDAV(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemModifyRequestProtocolWebDAV $protocolWebDAV)
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

