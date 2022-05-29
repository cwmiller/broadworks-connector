<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserClassmarkGetRequest
 *
 * Request the Class Mark data associated with User.
 *         The response is either a UserClassmarkGetResponse or an ErrorResponse.
 *
 * @see UserClassmarkGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"0d0e878cbc947aebb19ad489b2ffef11:172","type":"sequence"}]
 */
class UserClassmarkGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 0d0e878cbc947aebb19ad489b2ffef11:172
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

