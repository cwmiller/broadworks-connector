<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallCenterGetRequest
 *
 * Request the reseller level data associated with Call Center.
 *         The response is either a ResellerCallCenterGetResponse or an
 *         ErrorResponse.
 *
 * @see ResellerCallCenterGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:5921","type":"sequence"}]
 */
class ResellerCallCenterGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:5921
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

