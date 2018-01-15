<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDeviceTypeImportRequest
 *
 * Request to import a Device Type Archive File (DTAF) as a new Device Type.  The
 * URL supports the HTTP and the FILE protocols.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDeviceTypeImportRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

