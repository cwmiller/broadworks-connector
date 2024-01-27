<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCollaborateGetRequest
 *
 * Request the reseller level data associated with Collaborate.
 *         The response is either a ResellerCollaborateGetResponse or an
 *         ErrorResponse.
 *
 * @see ResellerCollaborateGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"bc805893b9cc7e3e01eec64e9ad62768:463","type":"sequence"}]
 */
class ResellerCollaborateGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group bc805893b9cc7e3e01eec64e9ad62768:463
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

