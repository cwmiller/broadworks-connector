<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserBargeInExemptGetRequest
 *
 * Request the user level data associated with Barge In Exempt.
 *         The response is either a UserBargeInExemptGetResponse or an
 *         ErrorResponse.
 *
 * @see UserBargeInExemptGetResponse
 * @see ErrorResponse
 */
class UserBargeInExemptGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
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

