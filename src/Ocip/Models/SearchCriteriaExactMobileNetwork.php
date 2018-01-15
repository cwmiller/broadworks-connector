<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactMobileNetwork
 *
 * Criteria for searching for a particular BroadWorks Mobility Mobile Network.
 */
class SearchCriteriaExactMobileNetwork extends SearchCriteria
{

    /**
     * @ElementName mobileNetworkName
     * @var string|null
     */
    private $mobileNetworkName = null;

    /**
     * Getter for mobileNetworkName
     *
     * @ElementName mobileNetworkName
     * @return string|null
     */
    public function getMobileNetworkName()
    {
        return $this->mobileNetworkName;
    }

    /**
     * Setter for mobileNetworkName
     *
     * @ElementName mobileNetworkName
     * @param string|null $mobileNetworkName
     * @return $this
     */
    public function setMobileNetworkName($mobileNetworkName)
    {
        $this->mobileNetworkName = $mobileNetworkName;
        return $this;
    }


}

