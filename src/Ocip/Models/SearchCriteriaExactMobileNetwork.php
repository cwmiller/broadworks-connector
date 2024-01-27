<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactMobileNetwork
 *
 * Criteria for searching for a particular BroadWorks Mobility Mobile Network.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1138","type":"sequence"}]
 */
class SearchCriteriaExactMobileNetwork extends SearchCriteria
{
    /**
     * @ElementName mobileNetworkName
     * @Type string
     * @Group 972fbf832439609ec8f2765c5637c3f1:1138
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $mobileNetworkName = null;

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

