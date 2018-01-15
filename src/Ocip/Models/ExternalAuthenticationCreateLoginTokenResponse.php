<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExternalAuthenticationCreateLoginTokenResponse
 *
 * Response to ExternalAuthenticationCreateLoginTokenRequest.
 */
class ExternalAuthenticationCreateLoginTokenResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName loginToken
     * @var string|null
     */
    private $loginToken = null;

    /**
     * Getter for loginToken
     *
     * @ElementName loginToken
     * @return string|null
     */
    public function getLoginToken()
    {
        return $this->loginToken;
    }

    /**
     * Setter for loginToken
     *
     * @ElementName loginToken
     * @param string|null $loginToken
     * @return $this
     */
    public function setLoginToken($loginToken)
    {
        $this->loginToken = $loginToken;
        return $this;
    }


}

