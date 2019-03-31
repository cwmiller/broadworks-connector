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
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:5967","type":"sequence"}]
 */
class ResellerCallCenterGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:5967
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $resellerId = null;

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

