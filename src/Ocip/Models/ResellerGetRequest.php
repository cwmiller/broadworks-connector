<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetRequest
 *
 * Get the profile for a reseller.
 *         The response is either ResellerGetResponse or ErrorResponse.
 *
 * @see ResellerGetResponse
 * @see ErrorResponse
 */
class ResellerGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @var string|null
     */
    private $resellerId = null;

    /**
     * Getter for resellerId
     *
     * @ElementName resellerId
     * @return string|null
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @ElementName resellerId
     * @param string|null $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }


}

