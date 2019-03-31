<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerServiceAuthorizationGetRequest
 *
 * Get the reseller service authorization
 *         The response is either ResellerServiceAuthorizationGetResponse or ErrorResponse.
 *
 * @see ResellerServiceAuthorizationGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:592","type":"sequence"}]
 */
class ResellerServiceAuthorizationGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:592
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

