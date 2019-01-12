<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrivacyGetRequest13mp17
 *
 * Request the user level data associated with Privacy.
 *         This command is supported for regular users only.
 *         The response is either a UserPrivacyGetResponse13mp17
 *         or an ErrorResponse.
 *
 * @see UserPrivacyGetResponse13mp17
 * @see ErrorResponse
 * @Groups [{"id":"b87b6355d5858fdbeb8c1eb05dc1651a:145","type":"sequence"}]
 */
class UserPrivacyGetRequest13mp17 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group b87b6355d5858fdbeb8c1eb05dc1651a:145
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

