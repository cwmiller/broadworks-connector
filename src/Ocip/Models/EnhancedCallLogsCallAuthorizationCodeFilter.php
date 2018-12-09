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
 * @Groups [{"id":"8e629edbac315ae7889caca732382c44:1840","type":"sequence","children":[{"id":"8e629edbac315ae7889caca732382c44:1841","type":"choice"}]}]
 */
class EnhancedCallLogsCallAuthorizationCodeFilter
{

    /**
     * @ElementName callsWithCodes
     * @Type bool
     * @Group 8e629edbac315ae7889caca732382c44:1841
     * @var bool|null
     */
    private $callsWithCodes = null;

    /**
     * @ElementName authorizationCode
     * @Type string
     * @Group 8e629edbac315ae7889caca732382c44:1841
     * @var string|null
     */
    private $authorizationCode = null;

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

