<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListRequest
 *
 * Request to get a list of completed enterprise level call center reporting scheduled reports.
 *         The response is either an EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListResponse or an ErrorResponse.
 *
 * @see EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:1603","type":"sequence"}]
 */
class EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group e2c537e3e39483b96620673a7012ffdd:1603
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:1603
     * @MinInclusive 1
     * @var int|null
     */
    protected $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaCallCenterScheduledReportName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:1603
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName[]
     */
    protected $searchCriteriaCallCenterScheduledReportName = array(
        
    );

    /**
     * @ElementName searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:1603
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor|null
     */
    protected $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null;

    /**
     * @ElementName searchCriteriaExactCallCenterReportTemplateKey
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterReportTemplateKey
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:1603
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterReportTemplateKey|null
     */
    protected $searchCriteriaExactCallCenterReportTemplateKey = null;

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

    /**
     * Getter for responseSizeLimit
     *
     * @return int
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @param int $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetResponseSizeLimit()
    {
        $this->responseSizeLimit = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaCallCenterScheduledReportName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName[]
     */
    public function getSearchCriteriaCallCenterScheduledReportName()
    {
        return $this->searchCriteriaCallCenterScheduledReportName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaCallCenterScheduledReportName;
    }

    /**
     * Setter for searchCriteriaCallCenterScheduledReportName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName[] $searchCriteriaCallCenterScheduledReportName
     * @return $this
     */
    public function setSearchCriteriaCallCenterScheduledReportName(array $searchCriteriaCallCenterScheduledReportName)
    {
        $this->searchCriteriaCallCenterScheduledReportName = $searchCriteriaCallCenterScheduledReportName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaCallCenterScheduledReportName()
    {
        $this->searchCriteriaCallCenterScheduledReportName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaCallCenterScheduledReportName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName
     * @return $this
     */
    public function addSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName)
    {
        $this->searchCriteriaCallCenterScheduledReportName[] = $searchCriteriaCallCenterScheduledReportName;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     */
    public function getSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        return $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
    }

    /**
     * Setter for searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @return $this
     */
    public function setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor)
    {
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactCallCenterReportTemplateKey
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterReportTemplateKey
     */
    public function getSearchCriteriaExactCallCenterReportTemplateKey()
    {
        return $this->searchCriteriaExactCallCenterReportTemplateKey instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactCallCenterReportTemplateKey;
    }

    /**
     * Setter for searchCriteriaExactCallCenterReportTemplateKey
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterReportTemplateKey $searchCriteriaExactCallCenterReportTemplateKey
     * @return $this
     */
    public function setSearchCriteriaExactCallCenterReportTemplateKey(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterReportTemplateKey $searchCriteriaExactCallCenterReportTemplateKey)
    {
        $this->searchCriteriaExactCallCenterReportTemplateKey = $searchCriteriaExactCallCenterReportTemplateKey;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactCallCenterReportTemplateKey()
    {
        $this->searchCriteriaExactCallCenterReportTemplateKey = null;
        return $this;
    }


}

