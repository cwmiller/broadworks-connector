<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBroadWorksReceptionistSmallBusinessGetRequest
 *
 * Request the Receptionist Small Business parameters.
 *         The response is either a UserBroadWorksReceptionistSmallBusinessGetResponse or an ErrorResponse.
 *
 * @see UserBroadWorksReceptionistSmallBusinessGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"452824ff4ca32a49de7f4a39514ef560:88","type":"sequence"}]
 */
class UserBroadWorksReceptionistSmallBusinessGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 452824ff4ca32a49de7f4a39514ef560:88
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

