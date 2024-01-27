<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemFileRepositoryDeviceUserDeleteRequest
 *
 * Delete a file repository user.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:10519","type":"sequence"}]
 */
class SystemFileRepositoryDeviceUserDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName fileRepositoryName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:10519
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $fileRepositoryName = null;

    /**
     * @ElementName userName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:10519
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $userName = null;

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

    /**
     * Getter for userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userName;
    }

    /**
     * Setter for userName
     *
     * @param string $userName
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserName()
    {
        $this->userName = null;
        return $this;
    }
}

