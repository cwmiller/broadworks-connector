<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallPoliciesModifyRequest
 *
 * Modify the reseller level data associated with Call Policies.
 *         The following elements are only used in AS data mode:
 *           forceRedirectingUserIdentityForRedirectedCalls
 *           applyRedirectingUserIdentityToNetworkLocations
 *           
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:411","type":"sequence"}]
 */
class ResellerCallPoliciesModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:411
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName forceRedirectingUserIdentityForRedirectedCalls
     * @Type bool
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:411
     * @var bool|null
     */
    protected $forceRedirectingUserIdentityForRedirectedCalls = null;

    /**
     * @ElementName applyRedirectingUserIdentityToNetworkLocations
     * @Type bool
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:411
     * @var bool|null
     */
    protected $applyRedirectingUserIdentityToNetworkLocations = null;

    /**
     * Getter for resellerId
     *
     * @return string
     */
    public function getResellerId()
    {
        return $this->resellerId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @param string $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerId()
    {
        $this->resellerId = null;
        return $this;
    }

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

