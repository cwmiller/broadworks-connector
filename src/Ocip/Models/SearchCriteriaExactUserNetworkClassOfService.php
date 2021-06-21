<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserNetworkClassOfService
 *
 * Criteria for searching for users with a specified network class of service.
 *
 * @Groups [{"id":"f0ada2681ca347fa83b464734259b304:1315","type":"sequence"}]
 */
class SearchCriteriaExactUserNetworkClassOfService extends SearchCriteria
{

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Group f0ada2681ca347fa83b464734259b304:1315
     * @MinLength 1
     * @MaxLength 40
     * @var string|null
     */
    private $networkClassOfService = null;

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

