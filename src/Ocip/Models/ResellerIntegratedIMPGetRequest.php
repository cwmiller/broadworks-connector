<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerIntegratedIMPGetRequest
 *
 * Get the Integrated IMP service attributes for the reseller.
 *         The response is either ResellerIntegratedIMPGetResponse or ErrorResponse.
 *         
 *         Replaced by: ResellerIntegratedIMPGetRequest22 in AS data mode
 *
 * @see ResellerIntegratedIMPGetResponse
 * @see ErrorResponse
 * @see ResellerIntegratedIMPGetRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:5088","type":"sequence"}]
 */
class ResellerIntegratedIMPGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:5088
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

