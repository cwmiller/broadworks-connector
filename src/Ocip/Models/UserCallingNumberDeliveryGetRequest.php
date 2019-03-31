<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNumberDeliveryGetRequest
 *
 * Request the user level data associated with Calling
 *         Name Delivery. The response is either a UserCallingNumberDeliveryGetResponse or an ErrorResponse.
 *
 * @see UserCallingNumberDeliveryGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"2739e54a6c7a2ab6abe092f89482573e:43","type":"sequence"}]
 */
class UserCallingNumberDeliveryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 2739e54a6c7a2ab6abe092f89482573e:43
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

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

