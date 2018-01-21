<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemExportBroadCloudDataRequest
 *
 * Request to export all users that have BroadCloud services, such as
 *         user profile information and BroadCloud services related information for
 * that user
 *         to a file so they can be uploaded to a Messaging Server/BroadCloud.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemExportBroadCloudDataRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName fileName
     * @var string|null
     */
    private $fileName = null;

    /**
     * Getter for fileName
     *
     * @ElementName fileName
     * @return string|null
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Setter for fileName
     *
     * @ElementName fileName
     * @param string|null $fileName
     * @return $this
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }


}

