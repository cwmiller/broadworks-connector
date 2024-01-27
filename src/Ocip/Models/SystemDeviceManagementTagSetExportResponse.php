<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetExportResponse
 *
 * Response to SystemDeviceManagementTagSetExportRequest.
 *
 * @see SystemDeviceManagementTagSetExportRequest
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:8308","type":"sequence"}]
 */
class SystemDeviceManagementTagSetExportResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName file
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:8308
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $file = null;

    /**
     * Getter for file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->file;
    }

    /**
     * Setter for file
     *
     * @param string $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFile()
    {
        $this->file = null;
        return $this;
    }
}

