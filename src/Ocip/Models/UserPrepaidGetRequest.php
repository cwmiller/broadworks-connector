<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPrepaidGetRequest
 *
 * Request the user level data associated with Prepaid.
 *         The response is either a UserPrepaidGetResponse or an
 *         ErrorResponse.
 *
 * @see UserPrepaidGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"a3db848ff82c292b536bc023d23eea50:42","type":"sequence"}]
 */
class UserPrepaidGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group a3db848ff82c292b536bc023d23eea50:42
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

