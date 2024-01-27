<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallNotifyGetRequest
 *
 * Request the reseller level data associated with Call Notify.
 *         The response is either a ResellerCallNotifyGetResponse or an
 *         ErrorResponse.
 *
 * @see ResellerCallNotifyGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"ec1be3ca6e990aac87b6fcf39d5e3445:50","type":"sequence"}]
 */
class ResellerCallNotifyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group ec1be3ca6e990aac87b6fcf39d5e3445:50
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

