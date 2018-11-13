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
 *         The response is either SystemDnGetUtilizationListResponse or
 * ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode:
 *           resellerId
 *
 * @see SystemDnGetUtilizationListResponse
 * @see ErrorResponse
 */
class SystemDnGetUtilizationListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName resellerId
     * @Type string
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

