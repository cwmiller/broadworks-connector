<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetResponse22
 *
 * Response to the ResellerGetRequest22.
 *         
 *         Replaced by: ResellerGetResponse22V2
 *
 * @see ResellerGetRequest22
 * @see ResellerGetResponse22V2
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:16995","type":"sequence"}]
 */
class ResellerGetResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName resellerName
     * @Type string
     * @Optional
     * @Group d8f04177e438f303b41c211e518706bf:16995
     * @MinLength 1
     * @MaxLength 320
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

