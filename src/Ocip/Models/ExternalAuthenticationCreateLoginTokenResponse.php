<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ExternalAuthenticationCreateLoginTokenResponse
 *
 * Response to ExternalAuthenticationCreateLoginTokenRequest.
 *
 * @see ExternalAuthenticationCreateLoginTokenRequest
 * @Groups [{"id":"d83be92ebac098705e715f24f025a9a9:254","type":"sequence"}]
 */
class ExternalAuthenticationCreateLoginTokenResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName loginToken
     * @Type string
     * @Group d83be92ebac098705e715f24f025a9a9:254
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

