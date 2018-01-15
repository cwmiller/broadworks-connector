<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanDigitPlanOriginatingGetRequest
 *
 * Request the originating permissions for digit patterns for a user.
 *         The response is either a
 * UserOutgoingCallingPlanDigitPlanOriginatingGetResponse or an ErrorResponse.
 */
class UserOutgoingCallingPlanDigitPlanOriginatingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }


}

