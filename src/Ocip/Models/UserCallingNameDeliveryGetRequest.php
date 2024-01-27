<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNameDeliveryGetRequest
 *
 * Request the user level data associated with Calling
 *         Name Delivery. The response is either a UserCallingNameDeliveryGetResponse or an ErrorResponse.
 *
 * @see UserCallingNameDeliveryGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"06a92852394dc03f09084365420b7b9e:43","type":"sequence"}]
 */
class UserCallingNameDeliveryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 06a92852394dc03f09084365420b7b9e:43
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

