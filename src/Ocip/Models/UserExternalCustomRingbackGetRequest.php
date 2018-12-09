<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExternalCustomRingbackGetRequest
 *
 * Request the user level data associated with External Custom Ringback.
 *         The response is either a UserExternalCustomRingbackGetResponse or an
 *         ErrorResponse.
 *
 * @see UserExternalCustomRingbackGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"ecf978efc1c280089e38b3f7b8fc97fb:101","type":"sequence"}]
 */
class UserExternalCustomRingbackGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group ecf978efc1c280089e38b3f7b8fc97fb:101
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

