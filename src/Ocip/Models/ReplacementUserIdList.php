<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementUserIdList
 *
 * A list of userIds that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:4517","type":"sequence"}]
 */
class ReplacementUserIdList
{
    /**
     * @ElementName userId
     * @Type string
     * @Array
     * @Group 6337d0cfba4de1c83587203c5b0bae54:4517
     * @MinLength 1
     * @MaxLength 161
     * @var string[]
     */
    protected $userId = [
        
    ];

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

