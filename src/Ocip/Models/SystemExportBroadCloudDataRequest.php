<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExportBroadCloudDataRequest
 *
 * Request to export all users that have BroadCloud services, such as
 *         user profile information and BroadCloud services related information for that user
 *         to a file so they can be uploaded to a Messaging Server/BroadCloud.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10067","type":"sequence"}]
 */
class SystemExportBroadCloudDataRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName fileName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:10067
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

