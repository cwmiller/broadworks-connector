<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupVirtualOnNetEnterpriseExtensionsAddUserRequest
 *
 * Adds Virtual On-Net users to a Group. It is possible to add 
 *         either: a single user,  or a list of users, or a range of users, 
 *         or any combination thereof.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"179b744b0183abe614e8c32c17c96b7e:98","type":"sequence"}]
 */
class GroupVirtualOnNetEnterpriseExtensionsAddUserRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:98
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 179b744b0183abe614e8c32c17c96b7e:98
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName virtualOnNetUser
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUser
     * @Array
     * @Optional
     * @Group 179b744b0183abe614e8c32c17c96b7e:98
     * @var \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUser[]
     */
    private $virtualOnNetUser = array(
        
    );

    /**
     * @ElementName virtualOnNetUserRange
     * @Type \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserRange
     * @Array
     * @Optional
     * @Group 179b744b0183abe614e8c32c17c96b7e:98
     * @var \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserRange[]
     */
    private $virtualOnNetUserRange = array(
        
    );

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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for virtualOnNetUser
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUser[]
     */
    public function getVirtualOnNetUser()
    {
        return $this->virtualOnNetUser instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->virtualOnNetUser;
    }

    /**
     * Setter for virtualOnNetUser
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUser[] $virtualOnNetUser
     * @return $this
     */
    public function setVirtualOnNetUser(array $virtualOnNetUser)
    {
        $this->virtualOnNetUser = $virtualOnNetUser;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVirtualOnNetUser()
    {
        $this->virtualOnNetUser = null;
        return $this;
    }

    /**
     * Adder for virtualOnNetUser
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUser $virtualOnNetUser
     * @return $this
     */
    public function addVirtualOnNetUser($virtualOnNetUser)
    {
        $this->virtualOnNetUser[] = $virtualOnNetUser;
        return $this;
    }

    /**
     * Getter for virtualOnNetUserRange
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserRange[]
     */
    public function getVirtualOnNetUserRange()
    {
        return $this->virtualOnNetUserRange instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->virtualOnNetUserRange;
    }

    /**
     * Setter for virtualOnNetUserRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserRange[] $virtualOnNetUserRange
     * @return $this
     */
    public function setVirtualOnNetUserRange(array $virtualOnNetUserRange)
    {
        $this->virtualOnNetUserRange = $virtualOnNetUserRange;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVirtualOnNetUserRange()
    {
        $this->virtualOnNetUserRange = null;
        return $this;
    }

    /**
     * Adder for virtualOnNetUserRange
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\VirtualOnNetUserRange $virtualOnNetUserRange
     * @return $this
     */
    public function addVirtualOnNetUserRange($virtualOnNetUserRange)
    {
        $this->virtualOnNetUserRange[] = $virtualOnNetUserRange;
        return $this;
    }


}

