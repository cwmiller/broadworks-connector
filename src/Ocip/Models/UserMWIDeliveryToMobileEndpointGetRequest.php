<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMWIDeliveryToMobileEndpointGetRequest
 *
 * Request the user level data associated with MWI Delivery to Mobile Endpoint service.
 *         The response is either a UserMWIDeliveryToMobileEndpointGetResponse or an ErrorResponse.
 *
 * @see UserMWIDeliveryToMobileEndpointGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"958b78cc2a785d78259c1e8a474eb40d:352","type":"sequence"}]
 */
class UserMWIDeliveryToMobileEndpointGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 958b78cc2a785d78259c1e8a474eb40d:352
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

