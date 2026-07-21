<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerStirShakenGetRequest23V3
 *
 * Get Reseller Stir Shaken service settings.
 *         The response is either ResellerStirShakenGetResponse23V3 or ErrorResponse.
 *         Replaced by ResellerStirShakenGetRequest23V4.
 *
 * @see ResellerStirShakenGetResponse23V3
 * @see ErrorResponse
 * @see ResellerStirShakenGetRequest23V4
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:19190","type":"sequence"}]
 */
class ResellerStirShakenGetRequest23V3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:19190
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

