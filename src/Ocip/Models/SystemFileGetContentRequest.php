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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:10219","type":"sequence"}]
 */
class SystemFileGetContentRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName fileName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:10219
     * @MinLength 1
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

