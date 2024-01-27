<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerResourcePriorityGetRequest
 *
 * Get the Resource Priority service attributes for the reseller.
 *         The response is either ResellerResourcePriorityGetResponse or ErrorResponse.
 *
 * @see ResellerResourcePriorityGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"1eceb69ac1f6f751a3ee0dce729e5cc2:45","type":"sequence"}]
 */
class ResellerResourcePriorityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group 1eceb69ac1f6f751a3ee0dce729e5cc2:45
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

