<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemDomainGetListRequest22
 *
 * Requests the list of all system-level domains and all reseller level domains. 
 *         If excludeReseller is specified, returns all the system-level domain
 * names only. 
 *         If resellerId is specified, returns all the system-level domain names
 * and the given reseller's domains. 
 *         If reseller administrator sends the request and resellerId is not
 * specified, the administrator's resellerId is used.
 *         
 *         The response is either SystemDomainGetListResponse22 or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *           includeReseller
 *           resellerId
 */
class SystemDomainGetListRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName excludeReseller
     * @var bool|null
     */
    private $excludeReseller = null;

    /**
     * @ElementName resellerId
     * @var string|null
     */
    private $resellerId = null;

    /**
     * Getter for excludeReseller
     *
     * @ElementName excludeReseller
     * @return bool|null
     */
    public function getExcludeReseller()
    {
        return $this->excludeReseller;
    }

    /**
     * Setter for excludeReseller
     *
     * @ElementName excludeReseller
     * @param bool|null $excludeReseller
     * @return $this
     */
    public function setExcludeReseller($excludeReseller)
    {
        $this->excludeReseller = $excludeReseller;
        return $this;
    }

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

