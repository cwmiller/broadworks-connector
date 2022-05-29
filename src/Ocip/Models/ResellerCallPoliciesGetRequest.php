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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:4466","type":"sequence"}]
 */
class ResellerCallPoliciesGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:4466
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

