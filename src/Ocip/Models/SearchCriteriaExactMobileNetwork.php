<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactMobileNetwork
 *
 * Criteria for searching for a particular BroadWorks Mobility Mobile Network.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1104","type":"sequence"}]
 */
class SearchCriteriaExactMobileNetwork extends SearchCriteria
{

    /**
     * @ElementName mobileNetworkName
     * @Type string
     * @Group f0ada2681ca347fa83b464734259b304:1104
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $mobileNetworkName = null;

    /**
     * Getter for mobileNetworkName
     *
     * @return string
     */
    public function getMobileNetworkName()
    {
        return $this->mobileNetworkName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mobileNetworkName;
    }

    /**
     * Setter for mobileNetworkName
     *
     * @param string $mobileNetworkName
     * @return $this
     */
    public function setMobileNetworkName($mobileNetworkName)
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


}

