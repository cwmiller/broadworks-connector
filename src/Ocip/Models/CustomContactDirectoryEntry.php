<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CustomContactDirectoryEntry
 *
 * Represents either an existing user's Id or an existing Virtual 
 *         On-Net user's DN. For a DN the groupId is used to make it unique 
 *         within an Enterprise, however the groupId is not used with Service 
 *         Providers.
 */
class CustomContactDirectoryEntry
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName virtualOnNetPhoneNumber
     * @var string|null
     */
    private $virtualOnNetPhoneNumber = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for virtualOnNetPhoneNumber
     *
     * @ElementName virtualOnNetPhoneNumber
     * @return string|null
     */
    public function getVirtualOnNetPhoneNumber()
    {
        return $this->virtualOnNetPhoneNumber;
    }

    /**
     * Setter for virtualOnNetPhoneNumber
     *
     * @ElementName virtualOnNetPhoneNumber
     * @param string|null $virtualOnNetPhoneNumber
     * @return $this
     */
    public function setVirtualOnNetPhoneNumber($virtualOnNetPhoneNumber)
    {
        $this->virtualOnNetPhoneNumber = $virtualOnNetPhoneNumber;
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


}

