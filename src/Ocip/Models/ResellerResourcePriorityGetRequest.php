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
 * @Groups [{"id":"0c61aa8506194ca714d0fe1c4a0b57ff:45","type":"sequence"}]
 */
class ResellerResourcePriorityGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 0c61aa8506194ca714d0fe1c4a0b57ff:45
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

