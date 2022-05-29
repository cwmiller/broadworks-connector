<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnhancedCallLogsAccountAuthorizationCodeFilter
 *
 * Filter criteria based on the account code.
 *         When "callsWithCodes" is set to true, all call logs with account/authorization codes are returned. 
 *         When it set to false, all call logs without account/authorization codes are returned.
 *
 * @Groups [{"id":"c0d21ef9ba207c335d8347e5172fce1d:2504","type":"sequence","children":[{"id":"c0d21ef9ba207c335d8347e5172fce1d:2505","type":"choice"}]}]
 */
class EnhancedCallLogsAccountAuthorizationCodeFilter
{

    /**
     * @ElementName callsWithCodes
     * @Type bool
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2505
     * @var bool|null
     */
    protected $callsWithCodes = null;

    /**
     * @ElementName accountAuthorizationCode
     * @Type string
     * @Group c0d21ef9ba207c335d8347e5172fce1d:2505
     * @MinLength 2
     * @MaxLength 14
     * @var string|null
     */
    protected $accountAuthorizationCode = null;

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

