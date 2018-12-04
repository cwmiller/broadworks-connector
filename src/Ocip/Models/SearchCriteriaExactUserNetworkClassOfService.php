<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactUserNetworkClassOfService
 *
 * Criteria for searching for users with a specified network class of service.
 *
 * @Groups [{"id":"d37849f5e289836ccd316323a7a3799a:1143","type":"sequence"}]
 */
class SearchCriteriaExactUserNetworkClassOfService extends SearchCriteria
{

    /**
     * @ElementName networkClassOfService
     * @Type string
     * @Group d37849f5e289836ccd316323a7a3799a:1143
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

