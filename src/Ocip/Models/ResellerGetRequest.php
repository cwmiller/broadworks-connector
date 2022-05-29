<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetRequest
 *
 * Get the profile for a reseller.
 *         The response is either ResellerGetResponse or ErrorResponse.
 *         
 *         Replaced by: ResellerGetRequest22
 *
 * @see ResellerGetResponse
 * @see ErrorResponse
 * @see ResellerGetRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:16512","type":"sequence"}]
 */
class ResellerGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16512
     * @MinLength 1
     * @MaxLength 30
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

