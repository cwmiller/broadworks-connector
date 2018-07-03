<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeExportResponse
 *
 * Response to SystemDeviceTypeExportRequest.
 *
 * @see SystemDeviceTypeExportRequest
 */
class SystemDeviceTypeExportResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName file
     * @var string|null
     */
    private $file = null;

    /**
     * Getter for file
     *
     * @ElementName file
     * @return string|null
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Setter for file
     *
     * @ElementName file
     * @param string|null $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }


}

