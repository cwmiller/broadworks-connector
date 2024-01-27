<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetRequest22
 *
 * Get the profile for a reseller.
 *         The response is either ResellerGetResponse22 or ErrorResponse.
 *         
 *         Replaced by: ResellerGetRequest22V2
 *
 * @see ResellerGetResponse22
 * @see ErrorResponse
 * @see ResellerGetRequest22V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:16961","type":"sequence"}]
 */
class ResellerGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group d8f04177e438f303b41c211e518706bf:16961
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

