<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserNetworkClassOfService
 *
 * Criteria for searching for users with a specified network class of service.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1364","type":"sequence"}]
 */
class SearchCriteriaExactUserNetworkClassOfService extends SearchCriteria
{
    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Group 972fbf832439609ec8f2765c5637c3f1:1364
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    protected $networkClassOfService = null;

    /**
     * Getter for networkClassOfService
     *
     * @return string
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->networkClassOfService;
    }

    /**
     * Setter for networkClassOfService
     *
     * @param string $networkClassOfService
     * @return $this
     */
    public function setNetworkClassOfService($networkClassOfService)
    {
        $this->networkClassOfService = $networkClassOfService;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNetworkClassOfService()
    {
        $this->networkClassOfService = null;
        return $this;
    }
}

