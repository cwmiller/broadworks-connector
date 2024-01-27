<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSimultaneousRingFamilyGetRequest14sp4
 *
 * Get the user's simultaneous ring service Family setting.
 *         The response is either a UserSimultaneousRingFamilyGetResponse14sp4 or an ErrorResponse.
 *
 * @see UserSimultaneousRingFamilyGetResponse14sp4
 * @see ErrorResponse
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:47206","type":"sequence"}]
 */
class UserSimultaneousRingFamilyGetRequest14sp4 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:47206
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

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
}

