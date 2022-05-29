<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse
 *
 * Response to SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest.
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest
 * @Groups [{"id":"f7ae3539fd471e995b07dc1bf8836e2d:1443","type":"sequence"}]
 */
class SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileNetworkName
     * @Type string
     * @Array
     * @Optional
     * @Group f7ae3539fd471e995b07dc1bf8836e2d:1443
     * @MinLength 1
     * @MaxLength 80
     * @var string[]
     */
    protected $mobileNetworkName = array(
        
    );

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

