<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerIntegratedIMPGetRequest22
 *
 * Get the Integrated IMP service attributes for the reseller.
 *         The response is either ResellerIntegratedIMPGetResponse22 or ErrorResponse.
 *
 * @see ResellerIntegratedIMPGetResponse22
 * @see ErrorResponse
 * @Groups [{"id":"23389100b68cef3aa07ee12ac7a2bd16:106","type":"sequence"}]
 */
class ResellerIntegratedIMPGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 23389100b68cef3aa07ee12ac7a2bd16:106
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

