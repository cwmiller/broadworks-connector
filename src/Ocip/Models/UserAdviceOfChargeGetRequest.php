<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAdviceOfChargeGetRequest
 *
 * Request the user level data associated with Advice Of Charge.
 *         The response is either a UserAdviceOfChargeGetResponse or an
 *         ErrorResponse.
 *
 * @see UserAdviceOfChargeGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"d7a3faa291b985d963cf43a21af19b28:287","type":"sequence"}]
 */
class UserAdviceOfChargeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group d7a3faa291b985d963cf43a21af19b28:287
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

