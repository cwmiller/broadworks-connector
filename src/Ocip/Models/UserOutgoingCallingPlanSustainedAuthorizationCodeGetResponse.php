<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse
 *
 * Response to UserOutgoingCallingPlanAuthorizationCodeGetRequest.
 *
 * @see UserOutgoingCallingPlanAuthorizationCodeGetRequest
 */
class UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName code
     * @var string|null
     */
    private $code = null;

    /**
     * Getter for code
     *
     * @ElementName code
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Setter for code
     *
     * @ElementName code
     * @param string|null $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }


}

