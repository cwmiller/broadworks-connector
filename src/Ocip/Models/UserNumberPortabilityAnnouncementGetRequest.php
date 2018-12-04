<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserNumberPortabilityAnnouncementGetRequest
 *
 * Get the Number Portability Announcement attributes for the user.
 *         The response is either UserNumberPortabilityAnnouncementGetResponse or ErrorResponse.
 *
 * @see UserNumberPortabilityAnnouncementGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"67bd72642521f0b9ac0225e3a36f500c:43","type":"sequence"}]
 */
class UserNumberPortabilityAnnouncementGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 67bd72642521f0b9ac0225e3a36f500c:43
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

