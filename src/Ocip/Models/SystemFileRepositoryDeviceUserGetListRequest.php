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
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:9009","type":"sequence"}]
 */
class SystemFileRepositoryDeviceUserGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName fileRepositoryName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:9009
     * @var string|null
     */
    private $fileRepositoryName = null;

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

