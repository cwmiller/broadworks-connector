<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAuthenticationGetRequest
 *
 * Get the user's authentication service information.
 *         The response is either a UserAuthenticationGetResponse or an ErrorResponse.
 *
 * @see UserAuthenticationGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"54d69397476ad35e338e87eedfeefacf:41","type":"sequence"}]
 */
class UserAuthenticationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 54d69397476ad35e338e87eedfeefacf:41
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

