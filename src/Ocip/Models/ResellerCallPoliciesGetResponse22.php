<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallPoliciesGetResponse22
 *
 * Response to ResellerCallPoliciesGetRequest22.
 *
 * @see ResellerCallPoliciesGetRequest22
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:390","type":"sequence"}]
 */
class ResellerCallPoliciesGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName forceRedirectingUserIdentityForRedirectedCalls
     * @Type bool
     * @Group d45e381d6dbac771631649063122a42e:390
     * @var bool|null
     */
    protected $forceRedirectingUserIdentityForRedirectedCalls = null;

    /**
     * @ElementName applyRedirectingUserIdentityToNetworkLocations
     * @Type bool
     * @Group d45e381d6dbac771631649063122a42e:390
     * @var bool|null
     */
    protected $applyRedirectingUserIdentityToNetworkLocations = null;

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

    /**
     * Getter for applyRedirectingUserIdentityToNetworkLocations
     *
     * @return bool
     */
    public function getApplyRedirectingUserIdentityToNetworkLocations()
    {
        return $this->applyRedirectingUserIdentityToNetworkLocations instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->applyRedirectingUserIdentityToNetworkLocations;
    }

    /**
     * Setter for applyRedirectingUserIdentityToNetworkLocations
     *
     * @param bool $applyRedirectingUserIdentityToNetworkLocations
     * @return $this
     */
    public function setApplyRedirectingUserIdentityToNetworkLocations($applyRedirectingUserIdentityToNetworkLocations)
    {
        $this->applyRedirectingUserIdentityToNetworkLocations = $applyRedirectingUserIdentityToNetworkLocations;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetApplyRedirectingUserIdentityToNetworkLocations()
    {
        $this->applyRedirectingUserIdentityToNetworkLocations = null;
        return $this;
    }
}

