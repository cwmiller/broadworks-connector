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
 * @Groups [{"id":"fb1070190f79a86aa955448146b539c7:287","type":"sequence"}]
 */
class UserAdviceOfChargeGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group fb1070190f79a86aa955448146b539c7:287
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

