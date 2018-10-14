<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse
 *
 * Response to SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest.
 *
 * @see SystemBroadWorksMobilityServiceAccessCodeListUsageGetRequest
 */
class SystemBroadWorksMobilityServiceAccessCodeListUsageGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName mobileNetworkName
     * @var string[]
     */
    private $mobileNetworkName = array(
        
    );

    /**
     * Getter for mobileNetworkName
     *
     * @ElementName mobileNetworkName
     * @return string[]
     */
    public function getMobileNetworkName()
    {
        return $this->mobileNetworkName;
    }

    /**
     * Setter for mobileNetworkName
     *
     * @ElementName mobileNetworkName
     * @param string[] $mobileNetworkName
     * @return $this
     */
    public function setMobileNetworkName(array $mobileNetworkName)
    {
        $this->mobileNetworkName = $mobileNetworkName;
        return $this;
    }

    /**
     * Adder for mobileNetworkName
     *
     * @ElementName mobileNetworkName
     * @param string $mobileNetworkName
     * @return $this
     */
    public function addMobileNetworkName(string $mobileNetworkName)
    {
        $this->mobileNetworkName []= $mobileNetworkName;
        return $this;
    }


}

