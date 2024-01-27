<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerDeviceActivationPolicyGetRequest
 *
 * Request the Device Activation policy of a reseller.
 *         The response is either a ResellerDeviceActivationPolicyGetResponse or an ErrorResponse.
 *
 * @see ResellerDeviceActivationPolicyGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:448","type":"sequence"}]
 */
class ResellerDeviceActivationPolicyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:448
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

