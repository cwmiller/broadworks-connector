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
 * @Groups [{"id":"c2306c3f9cea4bfa8682bbf7a2c099a0:352","type":"sequence"}]
 */
class UserMWIDeliveryToMobileEndpointGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group c2306c3f9cea4bfa8682bbf7a2c099a0:352
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

