<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerDeleteRequest
 *
 * Delete a reseller.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:429","type":"sequence","children":[{"id":"d45e381d6dbac771631649063122a42e:430","type":"choice"}]}]
 */
class ResellerDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:430
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName resellerExternalId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:430
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerExternalId = null;

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

