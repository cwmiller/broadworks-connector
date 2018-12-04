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
 * @Groups [{"id":"18819b2191ab2f91f6d92ec2df9e32dd:172","type":"sequence"}]
 */
class UserClassmarkGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 18819b2191ab2f91f6d92ec2df9e32dd:172
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

