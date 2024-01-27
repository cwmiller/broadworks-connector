<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse
 *
 * Response to UserOutgoingCallingPlanAuthorizationCodeGetRequest.
 *
 * @see UserOutgoingCallingPlanAuthorizationCodeGetRequest
 * @Groups [{"id":"a63afa661ee5c74f4700e562e88c66d0:1647","type":"sequence"}]
 */
class UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName code
     * @Type string
     * @Optional
     * @Group a63afa661ee5c74f4700e562e88c66d0:1647
     * @MinLength 2
     * @MaxLength 14
     * @var string|null
     */
    protected $code = null;

    /**
     * Getter for code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->code;
    }

    /**
     * Setter for code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCode()
    {
        $this->code = null;
        return $this;
    }
}

