<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnterpriseTrunkAddUserListRequest
 *
 * Request to add users to an enterprise trunk in a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEnterpriseTrunkAddUserListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName enterpriseTrunkName
     * @var string|null
     */
    private $enterpriseTrunkName = null;

    /**
     * @ElementName userId
     * @var string[]
     */
    private $userId = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Getter for enterpriseTrunkName
     *
     * @ElementName enterpriseTrunkName
     * @return string|null
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName;
    }

    /**
     * Setter for enterpriseTrunkName
     *
     * @ElementName enterpriseTrunkName
     * @param string|null $enterpriseTrunkName
     * @return $this
     */
    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        $this->enterpriseTrunkName = $enterpriseTrunkName;
        return $this;
    }

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string[]
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string[] $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Adder for userId
     *
     * @ElementName userId
     * @param string $userId
     * @return $this
     */
    public function addUserId($userId)
    {
        $this->userId []= $userId;
        return $this;
    }


}

