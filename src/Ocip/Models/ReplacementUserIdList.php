<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ReplacementUserIdList
 *
 * A list of userIds that replaces a previously configured list.
 *         By convention, an element of this type may be set nill to clear the list.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:3241","type":"sequence"}]
 */
class ReplacementUserIdList
{

    /**
     * @ElementName userId
     * @Type string
     * @Array
     * @Group c0d21ef9ba207c335d8347e5172fce1d:3241
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

