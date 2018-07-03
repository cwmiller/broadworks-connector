<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerGetResponse
 *
 * Response to the ResellerGetRequest.
 *
 * @see ResellerGetRequest
 */
class ResellerGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName resellerName
     * @var string|null
     */
    private $resellerName = null;

    /**
     * Getter for resellerName
     *
     * @ElementName resellerName
     * @return string|null
     */
    public function getResellerName()
    {
        return $this->resellerName;
    }

    /**
     * Setter for resellerName
     *
     * @ElementName resellerName
     * @param string|null $resellerName
     * @return $this
     */
    public function setResellerName($resellerName)
    {
        $this->resellerName = $resellerName;
        return $this;
    }


}

