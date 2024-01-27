<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactServiceProvider
 *
 * Criteria for searching for a particular fully specified service provider.
 *
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1228","type":"sequence"}]
 */
class SearchCriteriaExactServiceProvider extends SearchCriteria
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 972fbf832439609ec8f2765c5637c3f1:1228
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * Getter for serviceProviderId
     *
     * @return string
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @param string $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetServiceProviderId()
    {
        $this->serviceProviderId = null;
        return $this;
    }
}

