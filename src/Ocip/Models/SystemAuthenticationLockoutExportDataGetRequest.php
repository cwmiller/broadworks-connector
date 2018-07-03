<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAuthenticationLockoutExportDataGetRequest
 *
 * Request to export system wide authentication lockout data to a file. All locked
 * out device profiles, sip endpoints, and sip trunk groups are returned.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemAuthenticationLockoutExportDataGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

