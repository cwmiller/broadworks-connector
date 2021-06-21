<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerStirShakenGetRequest
 *
 * Get Reseller Stir Shaken service settings.
 *         The response is either ResellerStirShakenGetResponse or ErrorResponse.
 *
 * @see ResellerStirShakenGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:861","type":"sequence"}]
 */
class ResellerStirShakenGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:861
     * @MinLength 1
     * @MaxLength 36
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
