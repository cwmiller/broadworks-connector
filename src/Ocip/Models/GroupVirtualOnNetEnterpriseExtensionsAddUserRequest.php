<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVirtualOnNetEnterpriseExtensionsAddUserRequest
 *
 * Adds Virtual On-Net users to a Group. It is possible to add 
 *         either: a single user,  or a list of users, or a range of users, 
 *         or any combination thereof.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupVirtualOnNetEnterpriseExtensionsAddUserRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @ElementName virtualOnNetUser
     * @var \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUser[]
     */
    private $virtualOnNetUser = array(
        
    );

    /**
     * @ElementName virtualOnNetUserRange
     * @var \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserRange[]
     */
    private $virtualOnNetUserRange = array(
        
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
     * Getter for virtualOnNetUser
     *
     * @ElementName virtualOnNetUser
     * @return \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUser[]
     */
    public function getVirtualOnNetUser()
    {
        return $this->virtualOnNetUser;
    }

    /**
     * Setter for virtualOnNetUser
     *
     * @ElementName virtualOnNetUser
     * @param \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUser[] $virtualOnNetUser
     * @return $this
     */
    public function setVirtualOnNetUser($virtualOnNetUser)
    {
        $this->virtualOnNetUser = $virtualOnNetUser;
        return $this;
    }

    /**
     * Adder for virtualOnNetUser
     *
     * @ElementName virtualOnNetUser
     * @param \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUser $virtualOnNetUser
     * @return $this
     */
    public function addVirtualOnNetUser($virtualOnNetUser)
    {
        $this->virtualOnNetUser []= $virtualOnNetUser;
        return $this;
    }

    /**
     * Getter for virtualOnNetUserRange
     *
     * @ElementName virtualOnNetUserRange
     * @return \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserRange[]
     */
    public function getVirtualOnNetUserRange()
    {
        return $this->virtualOnNetUserRange;
    }

    /**
     * Setter for virtualOnNetUserRange
     *
     * @ElementName virtualOnNetUserRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserRange[] $virtualOnNetUserRange
     * @return $this
     */
    public function setVirtualOnNetUserRange($virtualOnNetUserRange)
    {
        $this->virtualOnNetUserRange = $virtualOnNetUserRange;
        return $this;
    }

    /**
     * Adder for virtualOnNetUserRange
     *
     * @ElementName virtualOnNetUserRange
     * @param \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserRange $virtualOnNetUserRange
     * @return $this
     */
    public function addVirtualOnNetUserRange($virtualOnNetUserRange)
    {
        $this->virtualOnNetUserRange []= $virtualOnNetUserRange;
        return $this;
    }


}

