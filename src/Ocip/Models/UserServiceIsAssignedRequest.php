<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserServiceIsAssignedRequest
 *
 * Request to determine if a UserService or service pack is assigned to the user.
 *         The response is either a UserServiceIsAssignedResponse or ErrorResponse
 *
 * @see UserServiceIsAssignedResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3910","type":"sequence","children":[{"id":"fb73488c2ef4ac4400ab213b637d79a9:3912","type":"choice"}]}]
 */
class UserServiceIsAssignedRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3910
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName serviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3912
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService|null
     */
    protected $serviceName = null;

    /**
     * @ElementName servicePackName
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3912
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $servicePackName = null;

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
     * Getter for serviceName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService
     */
    public function getServiceName()
    {
        return $this->serviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $serviceName
     * @return $this
     */
    public function setServiceName(\CWM\BroadWorksConnector\Ocip\Models\UserService $serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceName()
    {
        $this->serviceName = null;
        return $this;
    }

    /**
     * Getter for servicePackName
     *
     * @return string
     */
    public function getServicePackName()
    {
        return $this->servicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @param string $servicePackName
     * @return $this
     */
    public function setServicePackName($servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackName()
    {
        $this->servicePackName = null;
        return $this;
    }
}

