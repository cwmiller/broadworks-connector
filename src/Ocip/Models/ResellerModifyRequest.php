<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerModifyRequest
 *
 * Modify the reseller profile.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b009175f2a2a9d38115e319a6ad64d7f:668","type":"sequence","children":[{"id":"b009175f2a2a9d38115e319a6ad64d7f:669","type":"choice"}]}]
 */
class ResellerModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:669
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName resellerExternalId
     * @Type string
     * @Group b009175f2a2a9d38115e319a6ad64d7f:669
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerExternalId = null;

    /**
     * @ElementName resellerName
     * @Type string
     * @Nillable
     * @Optional
     * @Group b009175f2a2a9d38115e319a6ad64d7f:668
     * @MinLength 1
     * @MaxLength 320
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $resellerName = null;

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

    /**
     * Getter for resellerName
     *
     * @return string|null
     */
    public function getResellerName()
    {
        return $this->resellerName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerName;
    }

    /**
     * Setter for resellerName
     *
     * @param string|null $resellerName
     * @return $this
     */
    public function setResellerName($resellerName = null)
    {
        if ($resellerName === null) {
            $this->resellerName = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->resellerName = $resellerName;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResellerName()
    {
        $this->resellerName = null;
        return $this;
    }


}

