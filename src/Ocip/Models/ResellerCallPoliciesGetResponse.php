<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallPoliciesGetResponse
 *
 * Response to ResellerCallPoliciesGetRequest.
 *         
 *         Replaced by: ResellerCallPoliciesGetRequest22 in AS data mode.
 *
 * @see ResellerCallPoliciesGetRequest
 * @see ResellerCallPoliciesGetRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:5070","type":"sequence"}]
 */
class ResellerCallPoliciesGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName forceRedirectingUserIdentityForRedirectedCalls
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:5070
     * @var bool|null
     */
    protected $forceRedirectingUserIdentityForRedirectedCalls = null;

    /**
     * Getter for forceRedirectingUserIdentityForRedirectedCalls
     *
     * @return bool
     */
    public function getForceRedirectingUserIdentityForRedirectedCalls()
    {
        return $this->forceRedirectingUserIdentityForRedirectedCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->forceRedirectingUserIdentityForRedirectedCalls;
    }

    /**
     * Setter for forceRedirectingUserIdentityForRedirectedCalls
     *
     * @param bool $forceRedirectingUserIdentityForRedirectedCalls
     * @return $this
     */
    public function setForceRedirectingUserIdentityForRedirectedCalls($forceRedirectingUserIdentityForRedirectedCalls)
    {
        $this->forceRedirectingUserIdentityForRedirectedCalls = $forceRedirectingUserIdentityForRedirectedCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetForceRedirectingUserIdentityForRedirectedCalls()
    {
        $this->forceRedirectingUserIdentityForRedirectedCalls = null;
        return $this;
    }
}

