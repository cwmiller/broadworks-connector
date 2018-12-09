<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileGetContentRequest
 *
 * Requests the contents of a file.  This transaction is only allowed to get content for files under 
 *         /var/broadworks/userfiles/AuditLogs/ or /var/broadworks/IpDeviceConfig/.
 *         The response is either a SystemFileGetContentResponse or an ErrorResponse.
 *
 * @see SystemFileGetContentResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:8629","type":"sequence"}]
 */
class SystemFileGetContentRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName fileName
     * @Type string
     * @Group b5f5416d9e71f8e4246cda16c4723744:8629
     * @var string|null
     */
    private $fileName = null;

    /**
     * Getter for fileName
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileName;
    }

    /**
     * Setter for fileName
     *
     * @param string $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileName()
    {
        $this->fileName = null;
        return $this;
    }


}

