<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAuthenticationLockoutExportDataGetRequest
 *
 * Request to export system wide authentication lockout data to a file. All locked out device profiles, sip endpoints, and sip trunk groups are returned.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:2491","type":"sequence"}]
 */
class SystemAuthenticationLockoutExportDataGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName fileName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:2491
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

