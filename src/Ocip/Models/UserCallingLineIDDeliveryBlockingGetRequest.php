<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingLineIDDeliveryBlockingGetRequest
 *
 * Request the user level data associated with Calling Line ID Delivery Blocking.
 *         The response is either a UserCallingLineIDDeliveryBlockingGetResponse or an
 *         ErrorResponse.
 *
 * @see UserCallingLineIDDeliveryBlockingGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"2ced8e0cff8dbd941dee5e5a91ff3c4a:44","type":"sequence"}]
 */
class UserCallingLineIDDeliveryBlockingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 2ced8e0cff8dbd941dee5e5a91ff3c4a:44
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

