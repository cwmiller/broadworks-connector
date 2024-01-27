<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallPoliciesGetRequest
 *
 * Request the reseller level data associated with Call Policies.
 *         The response is either a ResellerCallPoliciesGetResponse
 *         or an ErrorResponse.
 *                 
 *         Replaced by: ResellerCallPoliciesGetRequest22 in AS data mode.
 *
 * @see ResellerCallPoliciesGetResponse
 * @see ErrorResponse
 * @see ResellerCallPoliciesGetRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:5053","type":"sequence"}]
 */
class ResellerCallPoliciesGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:5053
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

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
}

