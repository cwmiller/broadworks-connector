<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExternalAuthenticationCreateLoginTokenResponse
 *
 * Response to ExternalAuthenticationCreateLoginTokenRequest.
 *
 * @see ExternalAuthenticationCreateLoginTokenRequest
 * @Groups [{"id":"6b27fcc79475236456fc113a42b75543:271","type":"sequence"}]
 */
class ExternalAuthenticationCreateLoginTokenResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName loginToken
     * @Type string
     * @Group 6b27fcc79475236456fc113a42b75543:271
     * @var string|null
     */
    private $loginToken = null;

    /**
     * Getter for loginToken
     *
     * @return string
     */
    public function getLoginToken()
    {
        return $this->loginToken instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->loginToken;
    }

    /**
     * Setter for loginToken
     *
     * @param string $loginToken
     * @return $this
     */
    public function setLoginToken($loginToken)
    {
        $this->loginToken = $loginToken;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetLoginToken()
    {
        $this->loginToken = null;
        return $this;
    }


}

