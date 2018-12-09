<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRemoteOfficeGetRequest
 *
 * Request the user level data associated with Remote Office.
 *         The response is either a UserRemoteOfficeGetResponse or an ErrorResponse.
 *
 * @see UserRemoteOfficeGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"cd13183ea1594e025e217f61ef9e0137:41","type":"sequence"}]
 */
class UserRemoteOfficeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group cd13183ea1594e025e217f61ef9e0137:41
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

