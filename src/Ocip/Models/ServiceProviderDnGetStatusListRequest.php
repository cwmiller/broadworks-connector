<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderDnGetStatusListRequest
 *
 * Validates DNs given in the request  
 *         The response is ServiceProviderDnGetStatusListResponse.
 *
 * @see ServiceProviderDnGetStatusListResponse
 * @Groups [{"id":"f1088f4c5ceb30d524d2ba0f8097c393:3857","type":"sequence"}]
 */
class ServiceProviderDnGetStatusListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3857
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName dn
     * @Type string
     * @Array
     * @Group f1088f4c5ceb30d524d2ba0f8097c393:3857
     * @MinLength 1
     * @MaxLength 23
     * @var string[]
     */
    private $dn = array(
        
    );

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }

    /**
     * Getter for dn
     *
     * @return string[]
     */
    public function getDn()
    {
        return $this->dn instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dn;
    }

    /**
     * Setter for dn
     *
     * @param string[] $dn
     * @return $this
     */
    public function setDn(array $dn)
    {
        $this->dn = $dn;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDn()
    {
        $this->dn = null;
        return $this;
    }

    /**
     * Adder for dn
     *
     * @param string $dn
     * @return $this
     */
    public function addDn(string $dn)
    {
        $this->dn[] = $dn;
        return $this;
    }


}

