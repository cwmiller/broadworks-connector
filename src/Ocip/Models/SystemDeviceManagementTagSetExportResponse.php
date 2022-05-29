<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceManagementTagSetExportResponse
 *
 * Response to SystemDeviceManagementTagSetExportRequest.
 *
 * @see SystemDeviceManagementTagSetExportRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:8189","type":"sequence"}]
 */
class SystemDeviceManagementTagSetExportResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName file
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:8189
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

