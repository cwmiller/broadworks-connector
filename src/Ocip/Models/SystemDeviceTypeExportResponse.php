<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeExportResponse
 *
 * Response to SystemDeviceTypeExportRequest.
 *
 * @see SystemDeviceTypeExportRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:7211","type":"sequence"}]
 */
class SystemDeviceTypeExportResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName file
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:7211
     * @var string|null
     */
    private $file = null;

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

