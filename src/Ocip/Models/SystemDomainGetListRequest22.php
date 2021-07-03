<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetListRequest22
 *
 * Requests the list of all matching system-level domains and all matching reseller level domains. 
 *         If excludeReseller is specified, returns all matching system-level domain names only. 
 *         If resellerId is specified, returns all matching system-level domain names and the given reseller's domains. 
 *         If reseller administrator sends the request and resellerId is not specified, the administrator's resellerId is used.
 *         
 *         The response is either SystemDomainGetListResponse22 or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *           includeReseller
 *           resellerId
 *           
 *           Replaced by SystemDomainGetListRequest22V2 in AS data mode.
 *
 * @see SystemDomainGetListResponse22
 * @see ErrorResponse
 * @see SystemDomainGetListRequest22V2
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:26408","type":"choice"}]
 */
class SystemDomainGetListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName excludeReseller
     * @Type bool
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26408
     * @var bool|null
     */
    private $excludeReseller = null;

    /**
     * @ElementName resellerId
     * @Type string
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:26408
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $resellerId = null;

    /**
     * Getter for excludeReseller
     *
     * @return bool
     */
    public function getExcludeReseller()
    {
        return $this->excludeReseller instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->excludeReseller;
    }

    /**
     * Setter for excludeReseller
     *
     * @param bool $excludeReseller
     * @return $this
     */
    public function setExcludeReseller($excludeReseller)
    {
        $this->excludeReseller = $excludeReseller;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetExcludeReseller()
    {
        $this->excludeReseller = null;
        return $this;
    }

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

