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
 * @Groups [{"id":"610f84d3e188f0477c3ae1a82ee036da:8359","type":"sequence"}]
 */
class SystemExportBroadCloudDataRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName fileName
     * @Type string
     * @Group 610f84d3e188f0477c3ae1a82ee036da:8359
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

