<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNameDeliveryGetRequest
 *
 * Request the user level data associated with Calling
 *         Name Delivery. The response is either a
 *         UserCallingNameDeliveryGetResponse or an ErrorResponse.
 *
 * @see UserCallingNameDeliveryGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"79ba2ade68510b5e37c79d4de3ab4d46:44","type":"sequence"}]
 */
class UserCallingNameDeliveryGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 79ba2ade68510b5e37c79d4de3ab4d46:44
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

