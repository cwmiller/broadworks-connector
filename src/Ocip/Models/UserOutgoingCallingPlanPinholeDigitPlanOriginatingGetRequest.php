<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanPinholeDigitPlanOriginatingGetRequest
 *
 * Request the originating permissions for Pinhole digit patterns for a user.
 *         The response is either a
 * UserOutgoingCallingPlanPinholeDigitPlanOriginatingGetResponse or an
 * ErrorResponse.
 *
 * @see UserOutgoingCallingPlanPinholeDigitPlanOriginatingGetResponse
 * @see ErrorResponse
 */
class UserOutgoingCallingPlanPinholeDigitPlanOriginatingGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

