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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10337","type":"sequence"}]
 */
class SystemFileGetContentRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName fileName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:10337
     * @MinLength 1
     * @var string|null
     */
    protected $fileName = null;

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

