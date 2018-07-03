<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetUtilizationListRequest
 *
 * Request a list of DN utilizations by service providers. If resellerId is
 * specified, 
 *         the DNs assigned to the enterprises/service providers within the
 * reseller are returned.
 *         If reseller administrator sends the request and resellerId is not
 * specified, the administrator's resellerId is used.
 *         
 *         The response is either SystemDnUtilizationGetListResponse or
 * ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode:
 *           resellerId
 *
 * @see SystemDnUtilizationGetListResponse
 * @see ErrorResponse
 */
class SystemDnGetUtilizationListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

