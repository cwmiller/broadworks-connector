<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserDirectRouteGetRequest
 *
 * Get the direct route setting and the list of DTGs/Trunk Identities assigned to a user.
 *         The response is either UserDirectRouteGetResponse or ErrorResponse.
 *
 * @see UserDirectRouteGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"a78f4eda2a1b6844d5a0639c6940a98f:41","type":"sequence"}]
 */
class UserDirectRouteGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group a78f4eda2a1b6844d5a0639c6940a98f:41
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

