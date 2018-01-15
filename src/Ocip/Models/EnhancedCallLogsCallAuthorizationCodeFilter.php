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
 */
class EnhancedCallLogsCallAuthorizationCodeFilter
{

    /**
     * @ElementName callsWithCodes
     * @var bool|null
     */
    private $callsWithCodes = null;

    /**
     * @ElementName authorizationCode
     * @var string|null
     */
    private $authorizationCode = null;

    /**
     * Getter for callsWithCodes
     *
     * @ElementName callsWithCodes
     * @return bool|null
     */
    public function getCallsWithCodes()
    {
        return $this->callsWithCodes;
    }

    /**
     * Setter for callsWithCodes
     *
     * @ElementName callsWithCodes
     * @param bool|null $callsWithCodes
     * @return $this
     */
    public function setCallsWithCodes($callsWithCodes)
    {
        $this->callsWithCodes = $callsWithCodes;
        return $this;
    }

    /**
     * Getter for authorizationCode
     *
     * @ElementName authorizationCode
     * @return string|null
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * Setter for authorizationCode
     *
     * @ElementName authorizationCode
     * @param string|null $authorizationCode
     * @return $this
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
        return $this;
    }


}

