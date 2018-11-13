<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalPhoneListModifyRequest
 *
 * Modify an entry in a user's personal phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserPersonalPhoneListModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName entryName
     * @Type string
     * @var string|null
     */
    private $entryName = null;

    /**
     * @ElementName newEntryName
     * @Type string
     * @var string|null
     */
    private $newEntryName = null;

    /**
     * @ElementName phoneNumber
     * @Type string
     * @var string|null
     */
    private $phoneNumber = null;

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
     * Getter for entryName
     *
     * @return string
     */
    public function getEntryName()
    {
        return $this->entryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entryName;
    }

    /**
     * Setter for entryName
     *
     * @param string $entryName
     * @return $this
     */
    public function setEntryName($entryName)
    {
        $this->entryName = $entryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEntryName()
    {
        $this->entryName = null;
        return $this;
    }

    /**
     * Getter for newEntryName
     *
     * @return string
     */
    public function getNewEntryName()
    {
        return $this->newEntryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->newEntryName;
    }

    /**
     * Setter for newEntryName
     *
     * @param string $newEntryName
     * @return $this
     */
    public function setNewEntryName($newEntryName)
    {
        $this->newEntryName = $newEntryName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNewEntryName()
    {
        $this->newEntryName = null;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @param string $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumber()
    {
        $this->phoneNumber = null;
        return $this;
    }


}

