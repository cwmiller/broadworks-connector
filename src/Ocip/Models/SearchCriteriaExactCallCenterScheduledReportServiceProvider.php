<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaExactCallCenterScheduledReportServiceProvider
 *
 * Criteria for searching for a particular call center scheduled report's service provider.
 *
 * @Groups [{"id":"e446bfcbd1f39cbef57d1547014f2bb9:647","type":"sequence"}]
 */
class SearchCriteriaExactCallCenterScheduledReportServiceProvider extends SearchCriteria
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e446bfcbd1f39cbef57d1547014f2bb9:647
     * @var string|null
     */
    private $serviceProviderId = null;

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

