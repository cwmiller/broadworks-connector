<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetResponse
 *
 * Response to the ResellerGetRequest.
 *         
 *         Replaced by: ResellerGetResponse22
 *
 * @see ResellerGetRequest
 * @see ResellerGetResponse22
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:16978","type":"sequence"}]
 */
class ResellerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName resellerName
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16978
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $resellerName = null;

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
}

