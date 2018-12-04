<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPhysicalLocationGetRequest
 *
 * Request the user level data associated with Physical Location.
 *         The response is either a UserPhysicalLocationGetResponse or an ErrorResponse.
 *
 * @see UserPhysicalLocationGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"85df52bad9c98cf1c97d487c0041b427:89","type":"sequence"}]
 */
class UserPhysicalLocationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 85df52bad9c98cf1c97d487c0041b427:89
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

