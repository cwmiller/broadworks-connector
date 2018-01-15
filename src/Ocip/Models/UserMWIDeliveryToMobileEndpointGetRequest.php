<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMWIDeliveryToMobileEndpointGetRequest
 *
 * Request the user level data associated with MWI Delivery to Mobile Endpoint
 * service.
 *         The response is either a UserMWIDeliveryToMobileEndpointGetResponse or
 * an ErrorResponse.
 */
class UserMWIDeliveryToMobileEndpointGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

