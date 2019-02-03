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
 * @Groups [{"id":"de4d76f01f337fe4694212ec9f771753:5530","type":"sequence"}]
 */
class ResellerIntegratedIMPGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group de4d76f01f337fe4694212ec9f771753:5530
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

