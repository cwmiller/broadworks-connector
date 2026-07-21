<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMWIDeliveryToMobileEndpointGetRequest
 *
 * Request the user level data associated with MWI Delivery to Mobile Endpoint service.
 *         The response is either a UserMWIDeliveryToMobileEndpointGetResponse or an ErrorResponse.
 *         
 *         Replaced by: UserMWIDeliveryToMobileEndpointGetRequest23 in AS data mode.
 *
 * @see UserMWIDeliveryToMobileEndpointGetResponse
 * @see ErrorResponse
 * @see UserMWIDeliveryToMobileEndpointGetRequest23
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:21310","type":"sequence"}]
 */
class UserMWIDeliveryToMobileEndpointGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:21310
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

