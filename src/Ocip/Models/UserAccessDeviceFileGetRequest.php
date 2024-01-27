<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAccessDeviceFileGetRequest
 *
 * Request to get a user modifiable file.
 *         The response is either UserAccessDeviceFileGetResponse or ErrorResponse.
 *
 * @see UserAccessDeviceFileGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:238","type":"sequence"}]
 */
class UserAccessDeviceFileGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:238
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName accessDevice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     * @Group fb73488c2ef4ac4400ab213b637d79a9:238
     * @var \CWM\BroadWorksConnector\Ocip\Models\AccessDevice|null
     */
    protected $accessDevice = null;

    /**
     * @ElementName fileFormat
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:238
     * @MinLength 1
     * @MaxLength 128
     * @var string|null
     */
    protected $fileFormat = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for accessDevice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\AccessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accessDevice;
    }

    /**
     * Setter for accessDevice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice
     * @return $this
     */
    public function setAccessDevice(\CWM\BroadWorksConnector\Ocip\Models\AccessDevice $accessDevice)
    {
        $this->accessDevice = $accessDevice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccessDevice()
    {
        $this->accessDevice = null;
        return $this;
    }

    /**
     * Getter for fileFormat
     *
     * @return string
     */
    public function getFileFormat()
    {
        return $this->fileFormat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->fileFormat;
    }

    /**
     * Setter for fileFormat
     *
     * @param string $fileFormat
     * @return $this
     */
    public function setFileFormat($fileFormat)
    {
        $this->fileFormat = $fileFormat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetFileFormat()
    {
        $this->fileFormat = null;
        return $this;
    }
}

