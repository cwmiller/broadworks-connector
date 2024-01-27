<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * ServiceProviderServicePackGetListResponse
 *
 * Response to ServiceProviderServicePackGetListRequest.
 *
 * @see ServiceProviderServicePackGetListRequest
 * @Groups [{"id":"e19a9072c2dad499e9f28837da5768db:6230","type":"sequence"}]
 */
class ServiceProviderServicePackGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName servicePackName
     * @Type string
     * @Array
     * @Optional
     * @Group e19a9072c2dad499e9f28837da5768db:6230
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $servicePackName = [
        
    ];

    /**
     * Getter for servicePackName
     *
     * @return string[]
     */
    public function getServicePackName()
    {
        return $this->servicePackName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->servicePackName;
    }

    /**
     * Setter for servicePackName
     *
     * @param string[] $servicePackName
     * @return $this
     */
    public function setServicePackName(array $servicePackName)
    {
        $this->servicePackName = $servicePackName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServicePackName()
    {
        $this->servicePackName = null;
        return $this;
    }

    /**
     * Adder for servicePackName
     *
     * @param string $servicePackName
     * @return $this
     */
    public function addServicePackName(string $servicePackName)
    {
        $this->servicePackName[] = $servicePackName;
        return $this;
    }
}

