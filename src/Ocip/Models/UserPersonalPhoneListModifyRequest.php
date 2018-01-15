<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalPhoneListModifyRequest
 *
 * Modify an entry in a user's personal phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPersonalPhoneListModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName entryName
     * @var string|null
     */
    private $entryName = null;

    /**
     * @ElementName newEntryName
     * @var string|null
     */
    private $newEntryName = null;

    /**
     * @ElementName phoneNumber
     * @var string|null
     */
    private $phoneNumber = null;

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
     * Getter for entryName
     *
     * @ElementName entryName
     * @return string|null
     */
    public function getEntryName()
    {
        return $this->entryName;
    }

    /**
     * Setter for entryName
     *
     * @ElementName entryName
     * @param string|null $entryName
     * @return $this
     */
    public function setEntryName($entryName)
    {
        $this->entryName = $entryName;
        return $this;
    }

    /**
     * Getter for newEntryName
     *
     * @ElementName newEntryName
     * @return string|null
     */
    public function getNewEntryName()
    {
        return $this->newEntryName;
    }

    /**
     * Setter for newEntryName
     *
     * @ElementName newEntryName
     * @param string|null $newEntryName
     * @return $this
     */
    public function setNewEntryName($newEntryName)
    {
        $this->newEntryName = $newEntryName;
        return $this;
    }

    /**
     * Getter for phoneNumber
     *
     * @ElementName phoneNumber
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Setter for phoneNumber
     *
     * @ElementName phoneNumber
     * @param string|null $phoneNumber
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }


}

