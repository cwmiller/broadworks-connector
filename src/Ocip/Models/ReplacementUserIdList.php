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
     * @Type string
     * @Array
     * @var string[]
     */
    private $userId = array(
        
    );

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

