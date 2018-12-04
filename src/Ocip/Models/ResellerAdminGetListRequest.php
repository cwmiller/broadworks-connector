<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ResellerAdminGetListRequest
 *
 * Get a list of reseller administrators.
 *         The response is either a ResellerAdminGetListResponse or an ErrorResponse.
 *
 * @see ResellerAdminGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"7e8feb1c28b49a3b8755f86e716ebee7:103","type":"sequence"}]
 */
class ResellerAdminGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Group 7e8feb1c28b49a3b8755f86e716ebee7:103
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

