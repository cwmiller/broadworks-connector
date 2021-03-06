<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest
 *
 * Request a summary table of all enterprise trunk prefixes in the system. 
 *         If resellerId is specified, only the prefixes assigned to the enterprise/service provider within 
 *         the given reseller are returned.
 *         If reseller administrator sends the request and resellerId is not specified, the administrator's resellerId is used.
 *         
 *         The response is either SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse or ErrorResponse.
 *
 * @see SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListResponse
 * @see ErrorResponse
 * @Groups [{"id":"3f28429898a57a7f7846d3877b22df9f:707","type":"sequence"}]
 */
class SystemRouteListEnterpriseTrunkNumberPrefixGetSummaryListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group 3f28429898a57a7f7846d3877b22df9f:707
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

