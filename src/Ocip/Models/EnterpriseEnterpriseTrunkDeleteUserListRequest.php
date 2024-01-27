<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseEnterpriseTrunkDeleteUserListRequest
 *
 * Request to delete users from an enterprise trunk in an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"090e91b2d78e873f5d76a2f16af08d3a:171","type":"sequence"}]
 */
class EnterpriseEnterpriseTrunkDeleteUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:171
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName enterpriseTrunkName
     * @Type string
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:171
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $enterpriseTrunkName = null;

    /**
     * @ElementName userId
     * @Type string
     * @Array
     * @Group 090e91b2d78e873f5d76a2f16af08d3a:171
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $userId = [
        
    ];

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for enterpriseTrunkName
     *
     * @return string
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enterpriseTrunkName;
    }

    /**
     * Setter for enterpriseTrunkName
     *
     * @param string $enterpriseTrunkName
     * @return $this
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        $this->enterpriseTrunkName = $enterpriseTrunkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnterpriseTrunkName()
    {
        $this->enterpriseTrunkName = null;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @return string[]
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string[] $userId
     * @return $this
     */
    public function setUserId(array $userId)
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
     * Adder for userId
     *
     * @param string $userId
     * @return $this
     */
    public function addUserId(string $userId)
    {
        $this->userId[] = $userId;
        return $this;
    }
}

