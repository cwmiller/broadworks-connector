<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsAccountAuthorizationCodeFilter
 *
 * Filter criteria based on the account code.
 *         When "callsWithCodes" is set to true, all call logs with account/authorization codes are returned. 
 *         When it set to false, all call logs without account/authorization codes are returned.
 *
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:1817","type":"sequence","children":[{"id":"8e629edbac315ae7889caca732382c44:1818","type":"choice"}]}]
 */
class EnhancedCallLogsAccountAuthorizationCodeFilter
{

    /**
     * @ElementName callsWithCodes
     * @Type bool
     * @Group 8e629edbac315ae7889caca732382c44:1818
     * @var bool|null
     */
    private $callsWithCodes = null;

    /**
     * @ElementName accountAuthorizationCode
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:1818
     * @var string|null
     */
    private $accountAuthorizationCode = null;

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
     * Getter for accountAuthorizationCode
     *
     * @return string
     */
    public function getAccountAuthorizationCode()
    {
        return $this->accountAuthorizationCode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->accountAuthorizationCode;
    }

    /**
     * Setter for accountAuthorizationCode
     *
     * @param string $accountAuthorizationCode
     * @return $this
     */
    public function setAccountAuthorizationCode($accountAuthorizationCode)
    {
        $this->accountAuthorizationCode = $accountAuthorizationCode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAccountAuthorizationCode()
    {
        $this->accountAuthorizationCode = null;
        return $this;
    }


}

