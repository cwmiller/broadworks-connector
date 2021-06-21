<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * CustomContactDirectoryEntry
 *
 * Represents either an existing user's Id or an existing Virtual 
 *         On-Net user's DN. For a DN the groupId is used to make it unique 
 *         within an Enterprise, however the groupId is not used with Service 
 *         Providers.
 *
 * @Groups [{"id":"f3a93cf15de4abd7903673e44ee3e07b:9018","type":"sequence","children":[{"id":"f3a93cf15de4abd7903673e44ee3e07b:9019","type":"choice","children":[{"id":"f3a93cf15de4abd7903673e44ee3e07b:9021","type":"sequence"}]}]}]
 */
class CustomContactDirectoryEntry
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9019
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName virtualOnNetPhoneNumber
     * @Type string
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9021
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    private $virtualOnNetPhoneNumber = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Optional
     * @Group f3a93cf15de4abd7903673e44ee3e07b:9021
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $groupId = null;

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
     * Getter for virtualOnNetPhoneNumber
     *
     * @return string
     */
    public function getVirtualOnNetPhoneNumber()
    {
        return $this->virtualOnNetPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->virtualOnNetPhoneNumber;
    }

    /**
     * Setter for virtualOnNetPhoneNumber
     *
     * @param string $virtualOnNetPhoneNumber
     * @return $this
     */
    public function setVirtualOnNetPhoneNumber($virtualOnNetPhoneNumber)
    {
        $this->virtualOnNetPhoneNumber = $virtualOnNetPhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVirtualOnNetPhoneNumber()
    {
        $this->virtualOnNetPhoneNumber = null;
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


}

