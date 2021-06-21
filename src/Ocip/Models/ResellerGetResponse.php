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
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:16548","type":"sequence"}]
 */
class ResellerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName resellerName
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:16548
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $resellerName = null;

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

