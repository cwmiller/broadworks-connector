<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementUserIdList
 *
 * A list of userIds that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the
 * list.
 */
class ReplacementUserIdList
{

    /**
     * @ElementName userId
     * @var string[]
     */
    private $userId = array(
        
    );

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

