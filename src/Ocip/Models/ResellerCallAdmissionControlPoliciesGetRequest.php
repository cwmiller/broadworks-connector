<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallAdmissionControlPoliciesGetRequest
 *
 * Get a reseller call admission control policies.
 *         The response is either a ResellerCallAdmissionControlPoliciesGetResponse or an ErrorResponse.
 *
 * @see ResellerCallAdmissionControlPoliciesGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:313","type":"sequence"}]
 */
class ResellerCallAdmissionControlPoliciesGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:313
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

