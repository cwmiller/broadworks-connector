<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceUserDeleteRequest
 *
 * Delete a file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceUserDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName fileRepositoryName
     * @var string|null
     */
    private $fileRepositoryName = null;

    /**
     * @ElementName userName
     * @var string|null
     */
    private $userName = null;

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

    /**
     * Getter for userName
     *
     * @ElementName userName
     * @return string|null
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Setter for userName
     *
     * @ElementName userName
     * @param string|null $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }


}

