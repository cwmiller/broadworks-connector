<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDnGetUtilizationListRequest
 *
 * Request a list of DN utilizations by service providers. If resellerId is specified, 
 *         the DNs assigned to the enterprises/service providers within the reseller are returned.
 *         If reseller administrator sends the request and resellerId is not specified, the administrator's resellerId is used.
 *         
 *         The response is either a SystemDnGetUtilizationListResponse or ErrorResponse.
 *         
 *         The following data elements are only used in AS data mode:
 *           resellerId
 *
 * @see SystemDnGetUtilizationListResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:9459","type":"sequence"}]
 */
class SystemDnGetUtilizationListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:9459
     * @MinLength 1
     * @MaxLength 36
     * @var string|null
     */
    protected $resellerId = null;

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

