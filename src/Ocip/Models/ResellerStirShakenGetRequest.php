<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerStirShakenGetRequest
 *
 * Get Reseller Stir Shaken service settings.
 *         The response is either ResellerStirShakenGetResponse or ErrorResponse.
 *         Replaced by ResellerStirShakenGetRequest23
 *
 * @see ResellerStirShakenGetResponse
 * @see ErrorResponse
 * @see ResellerStirShakenGetRequest23
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:17012","type":"sequence"}]
 */
class ResellerStirShakenGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:17012
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

