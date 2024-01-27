<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceUserGetListRequest
 *
 * Request the list of users for a file repository in the system.
 *         The response is either a SystemFileRepositoryDeviceUserGetListResponse or an ErrorResponse.
 *
 * @see SystemFileRepositoryDeviceUserGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10536","type":"sequence"}]
 */
class SystemFileRepositoryDeviceUserGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName fileRepositoryName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:10536
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $fileRepositoryName = null;

    /**
     * Getter for fileRepositoryName
     *
     * @return string
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileRepositoryName;
    }

    /**
     * Setter for fileRepositoryName
     *
     * @param string $fileRepositoryName
     * @return $this
     */
    public function setFileRepositoryName($fileRepositoryName)
    {
        $this->fileRepositoryName = $fileRepositoryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileRepositoryName()
    {
        $this->fileRepositoryName = null;
        return $this;
    }
}

