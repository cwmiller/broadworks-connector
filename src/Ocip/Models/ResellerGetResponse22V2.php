<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetResponse22V2
 *
 * Response to the ResellerGetRequest22V2.
 *
 * @see ResellerGetRequest22V2
 * @Groups [{"id":"d45e381d6dbac771631649063122a42e:604","type":"sequence"}]
 */
class ResellerGetResponse22V2 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName resellerName
     * @Type string
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:604
     * @MinLength 1
     * @MaxLength 320
     * @var string|null
     */
    protected $resellerName = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Group d45e381d6dbac771631649063122a42e:604
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

    /**
     * @ElementName resellerExternalId
     * @Type string
     * @Optional
     * @Group d45e381d6dbac771631649063122a42e:604
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerExternalId = null;

    /**
     * Getter for resellerName
     *
     * @return string
     */
    public function getResellerName()
    {
        return $this->resellerName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->resellerName;
    }

    /**
     * Setter for resellerName
     *
     * @param string $resellerName
     * @return $this
     */
    public function setResellerName($resellerName)
    {
        $this->resellerName = $resellerName;
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

