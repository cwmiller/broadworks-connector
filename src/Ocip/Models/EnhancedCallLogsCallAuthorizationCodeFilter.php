<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsCallAuthorizationCodeFilter
 *
 * Filter criteria based on call authorization code. Note that this code
 *         filter is different than EnhancedCallLogsAccountAuthorizationCodeFilter,
 *         which applies strictly to codes entered using the account/authorization
 *         code service.
 *         When "callsWithCodes" is set to true, all call logs with authorization
 *         codes are returned. 
 *         When it set to false, all call logs without authorization codes are
 *         returned.
 *         If "authorizationCode" is set, all call logs matching that specific
 *         authorization code are returned.
 *
 * @Groups [{"id":"6337d0cfba4de1c83587203c5b0bae54:3009","type":"sequence","children":[{"id":"6337d0cfba4de1c83587203c5b0bae54:3010","type":"choice"}]}]
 */
class EnhancedCallLogsCallAuthorizationCodeFilter
{
    /**
     * @ElementName callsWithCodes
     * @Type bool
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3010
     * @var bool|null
     */
    protected $callsWithCodes = null;

    /**
     * @ElementName authorizationCode
     * @Type string
     * @Group 6337d0cfba4de1c83587203c5b0bae54:3010
     * @MinLength 2
     * @MaxLength 14
     * @var string|null
     */
    protected $authorizationCode = null;

    /**
     * Getter for callsWithCodes
     *
     * @return bool
     */
    public function getCallsWithCodes()
    {
        return $this->callsWithCodes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callsWithCodes;
    }

    /**
     * Setter for callsWithCodes
     *
     * @param bool $callsWithCodes
     * @return $this
     */
    public function setCallsWithCodes($callsWithCodes)
    {
        $this->callsWithCodes = $callsWithCodes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallsWithCodes()
    {
        $this->callsWithCodes = null;
        return $this;
    }

    /**
     * Getter for authorizationCode
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->authorizationCode;
    }

    /**
     * Setter for authorizationCode
     *
     * @param string $authorizationCode
     * @return $this
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAuthorizationCode()
    {
        $this->authorizationCode = null;
        return $this;
    }
}

