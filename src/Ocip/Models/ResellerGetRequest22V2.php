<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetRequest22V2
 *
 * Get the profile for a reseller.
 *         The response is either ResellerGetResponse22V2 or ErrorResponse.
 *
 * @see ResellerGetResponse22V2
 * @see ErrorResponse
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:584","type":"sequence","children":[{"id":"b009175f2a2a9d38115e319a6ad64d7f:585","type":"choice"}]}]
 */
class ResellerGetRequest22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:585
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    private $resellerId = null;

    /**
     * @ElementName resellerExternalId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:585
     * @MaxLength 36
     * @var string|null
     */
    private $resellerExternalId = null;

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

    /**
     * Getter for resellerExternalId
     *
     * @return string
     */
    public function getResellerExternalId()
    {
        return $this->resellerExternalId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerExternalId;
    }

    /**
     * Setter for resellerExternalId
     *
     * @param string $resellerExternalId
     * @return $this
     */
    public function setResellerExternalId($resellerExternalId)
    {
        $this->resellerExternalId = $resellerExternalId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerExternalId()
    {
        $this->resellerExternalId = null;
        return $this;
    }


}

