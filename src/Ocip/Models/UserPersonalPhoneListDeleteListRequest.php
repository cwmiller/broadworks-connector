<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalPhoneListDeleteListRequest
 *
 * Delete one or more entries from a user's personal phone list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserPersonalPhoneListDeleteListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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
     * @Array
     * @var string[]
     */
    private $entryName = array(
        
    );

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
     * @return string[]
     */
    public function getEntryName()
    {
        return $this->entryName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->entryName;
    }

    /**
     * Setter for entryName
     *
     * @param string[] $entryName
     * @return $this
     */
    public function setEntryName(array $entryName)
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
     * Adder for entryName
     *
     * @param string $entryName
     * @return $this
     */
    public function addEntryName(string $entryName)
    {
        $this->entryName[] = $entryName;
        return $this;
    }


}

