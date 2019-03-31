<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerCallNotifyGetRequest
 *
 * Request the reseller level data associated with Call Notify.
 *         The response is either a ResellerCallNotifyGetResponse or an
 *         ErrorResponse.
 *
 * @see ResellerCallNotifyGetResponse
 * @see ErrorResponse
 * @Groups [{"id":"26f62134ab1693f4bdddc7c70b20d2eb:50","type":"sequence"}]
 */
class ResellerCallNotifyGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 26f62134ab1693f4bdddc7c70b20d2eb:50
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

