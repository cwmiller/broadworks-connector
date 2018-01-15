<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsAccountAuthorizationCodeFilter
 *
 * Filter criteria based on the account code.
 *         When "callsWithCodes" is set to true, all call logs with
 * account/authorization codes are returned. 
 *         When it set to false, all call logs without account/authorization codes
 * are returned.
 */
class EnhancedCallLogsAccountAuthorizationCodeFilter
{

    /**
     * @ElementName callsWithCodes
     * @var bool|null
     */
    private $callsWithCodes = null;

    /**
     * @ElementName accountAuthorizationCode
     * @var string|null
     */
    private $accountAuthorizationCode = null;

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
     * Getter for accountAuthorizationCode
     *
     * @ElementName accountAuthorizationCode
     * @return string|null
     */
    public function getAccountAuthorizationCode()
    {
        return $this->accountAuthorizationCode;
    }

    /**
     * Setter for accountAuthorizationCode
     *
     * @ElementName accountAuthorizationCode
     * @param string|null $accountAuthorizationCode
     * @return $this
     */
    public function setAccountAuthorizationCode($accountAuthorizationCode)
    {
        $this->accountAuthorizationCode = $accountAuthorizationCode;
        return $this;
    }


}

