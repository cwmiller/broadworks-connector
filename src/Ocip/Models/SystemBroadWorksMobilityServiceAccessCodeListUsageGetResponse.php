<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse
 *
 * Response to SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest.
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest
 * @Groups [{"id":"9ae9f7d53e566e21347e23e20e2a2a39:1442","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName mobileNetworkName
     * @Type string
     * @Array
     * @Optional
     * @Group 9ae9f7d53e566e21347e23e20e2a2a39:1442
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $mobileNetworkName = [
        
    ];

    /**
     * Getter for mobileNetworkName
     *
     * @return string[]
     */
    public function getMobileNetworkName()
    {
        return $this->mobileNetworkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNetworkName;
    }

    /**
     * Setter for mobileNetworkName
     *
     * @param string[] $mobileNetworkName
     * @return $this
     */
    public function setMobileNetworkName(array $mobileNetworkName)
    {
        $this->mobileNetworkName = $mobileNetworkName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMobileNetworkName()
    {
        $this->mobileNetworkName = null;
        return $this;
    }

    /**
     * Adder for mobileNetworkName
     *
     * @param string $mobileNetworkName
     * @return $this
     */
    public function addMobileNetworkName(string $mobileNetworkName)
    {
        $this->mobileNetworkName[] = $mobileNetworkName;
        return $this;
    }
}

