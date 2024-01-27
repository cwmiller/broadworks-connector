<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemConfigurableFileSystemGetResponse23V2
 *
 * Response to SystemConfigurableFileSystemGetRequest23V2.
 *         Contains the File System parameters.
 *         The following elements are only used in AS data mode:
 *             protocolFile-secure
 *         value "false" is returned in XS data mode
 *
 * @see SystemConfigurableFileSystemGetRequest23V2
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:6700","type":"sequence","children":[{"id":"da582a1f8028404e70d260cf1f891033:6702","type":"choice"}]}]
 */
class SystemConfigurableFileSystemGetResponse23V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mediaDirectory
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:6700
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $mediaDirectory = null;

    /**
     * @ElementName protocolFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23V2ProtocolFile
     * @Group da582a1f8028404e70d260cf1f891033:6702
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23V2ProtocolFile|null
     */
    protected $protocolFile = null;

    /**
     * @ElementName protocolWebDAV
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23V2ProtocolWebDAV
     * @Group da582a1f8028404e70d260cf1f891033:6702
     * @var \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23V2ProtocolWebDAV|null
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23V2ProtocolFile
     */
    public function getProtocolFile()
    {
        return $this->protocolFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolFile;
    }

    /**
     * Setter for protocolFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23V2ProtocolFile $protocolFile
     * @return $this
     */
    public function setProtocolFile(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23V2ProtocolFile $protocolFile)
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
     * @return \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23V2ProtocolWebDAV
     */
    public function getProtocolWebDAV()
    {
        return $this->protocolWebDAV instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->protocolWebDAV;
    }

    /**
     * Setter for protocolWebDAV
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23V2ProtocolWebDAV $protocolWebDAV
     * @return $this
     */
    public function setProtocolWebDAV(\CWM\BroadWorksConnector\Ocip\Models\SystemConfigurableFileSystemGetResponse23V2ProtocolWebDAV $protocolWebDAV)
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

