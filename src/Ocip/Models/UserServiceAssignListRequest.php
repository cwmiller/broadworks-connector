<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserServiceAssignListRequest
 *
 * Request to assign the user services and service packs for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         In AS data mode, a Warning ErrorResponse is sent when the transaction is partially successful
 *         while an Error ErrorResponse is sent when the transaction fails for all the services.
 *         In XS data mode, a Warning ErrorResponse is always sent when there is at least one error.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @see ErrorResponse
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:3856","type":"sequence"}]
 */
class UserServiceAssignListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3856
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName serviceName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserService
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3856
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    protected $serviceName = [
        
    ];

    /**
     * @ElementName servicePackName
     * @Type string
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:3856
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $servicePackName = [
        
    ];

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
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserService[]
     */
    public function getServiceName()
    {
        return $this->serviceName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceName;
    }

    /**
     * Setter for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService[] $serviceName
     * @return $this
     */
    public function setServiceName(array $serviceName)
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
     * Adder for serviceName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserService $serviceName
     * @return $this
     */
    public function addServiceName($serviceName)
    {
        $this->serviceName[] = $serviceName;
        return $this;
    }

    /**
     * Getter for servicePackName
     *
     * @return string[]
     */
    public function getServicePackName()
    {
        return $this->servicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @param string[] $servicePackName
     * @return $this
     */
    public function setServicePackName(array $servicePackName)
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

    /**
     * Adder for servicePackName
     *
     * @param string $servicePackName
     * @return $this
     */
    public function addServicePackName(string $servicePackName)
    {
        $this->servicePackName[] = $servicePackName;
        return $this;
    }
}

