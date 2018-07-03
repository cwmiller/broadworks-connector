<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceUserGetListRequest
 *
 * Request the list of users for a file repository in the system.
 *         The response is either a SystemFileRepositoryDeviceUserGetListResponse
 * or an ErrorResponse.
 *
 * @see SystemFileRepositoryDeviceUserGetListResponse
 * @see ErrorResponse
 */
class SystemFileRepositoryDeviceUserGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName fileRepositoryName
     * @var string|null
     */
    private $fileRepositoryName = null;

    /**
     * Getter for fileRepositoryName
     *
     * @ElementName fileRepositoryName
     * @return string|null
     */
    public function getFileRepositoryName()
    {
        return $this->fileRepositoryName;
    }

    /**
     * Setter for fileRepositoryName
     *
     * @ElementName fileRepositoryName
     * @param string|null $fileRepositoryName
     * @return $this
     */
    public function setFileRepositoryName($fileRepositoryName)
    {
        $this->fileRepositoryName = $fileRepositoryName;
        return $this;
    }


}

