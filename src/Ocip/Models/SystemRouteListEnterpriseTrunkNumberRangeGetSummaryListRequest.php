<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest
 *
 * Request a summary table of all enterprise trunk number ranges in the system. 
 *         If resellerId is specified, the number ranges assigned to the
 * enterprises/service providers 
 *         within the reseller are returned.
 *         If reseller administrator sends the request and resellerId is not
 * specified, the administrator's resellerId is used.
 *         
 *         The response is either
 * SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse or
 * ErrorResponse.
 *
 * @see SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListResponse
 * @see ErrorResponse
 */
class SystemRouteListEnterpriseTrunkNumberRangeGetSummaryListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @var string|null
     */
    private $resellerId = null;

    /**
     * Getter for resellerId
     *
     * @ElementName resellerId
     * @return string|null
     */
    public function getResellerId()
    {
        return $this->resellerId;
    }

    /**
     * Setter for resellerId
     *
     * @ElementName resellerId
     * @param string|null $resellerId
     * @return $this
     */
    public function setResellerId($resellerId)
    {
        $this->resellerId = $resellerId;
        return $this;
    }


}

