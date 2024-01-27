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
 * @Groups [{"id":"37cec25308bcc82fe5a80bf541c42c89:124","type":"sequence"}]
 */
class ResellerIntegratedIMPGetRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group 37cec25308bcc82fe5a80bf541c42c89:124
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

