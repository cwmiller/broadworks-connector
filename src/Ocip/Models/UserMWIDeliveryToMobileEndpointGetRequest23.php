<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMWIDeliveryToMobileEndpointGetRequest23
 *
 * Request the user level data associated with MWI Delivery to Mobile Endpoint service.
 *         The response is either a UserMWIDeliveryToMobileEndpointGetResponse23 or an ErrorResponse.
 *            
 *            The following elements are only used in AS data mode:
 *            sendMissedCallAlert
 *
 * @see UserMWIDeliveryToMobileEndpointGetResponse23
 * @see ErrorResponse
 * @Groups [{"id":"1ea80c1e18c25d0eed23dbc7bd18f1dc:365","type":"sequence"}]
 */
class UserMWIDeliveryToMobileEndpointGetRequest23 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 1ea80c1e18c25d0eed23dbc7bd18f1dc:365
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

