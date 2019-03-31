<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingScheduledReportGetListRequest
 *
 * Request to get the list of all call center reporting scheduled reports in the system.
 *         The response is either an SystemCallCenterEnhancedReportingScheduledReportGetListResponse or an ErrorResponse.
 *
 * @see SystemCallCenterEnhancedReportingScheduledReportGetListResponse
 * @see ErrorResponse
 * @Groups [{"id":"e2c537e3e39483b96620673a7012ffdd:6376","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingScheduledReportGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @Type int
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6376
     * @MinInclusive 1
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaCallCenterScheduledReportName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6376
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName[]
     */
    private $searchCriteriaCallCenterScheduledReportName = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6376
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    private $searchCriteriaGroupId = array(
        
    );

    /**
     * @ElementName searchCriteriaExactCallCenterScheduledReportServiceProvider
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportServiceProvider
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6376
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportServiceProvider|null
     */
    private $searchCriteriaExactCallCenterScheduledReportServiceProvider = null;

    /**
     * @ElementName searchCriteriaServiceProviderId
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6376
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    private $searchCriteriaServiceProviderId = array(
        
    );

    /**
     * @ElementName searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6376
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor|null
     */
    private $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null;

    /**
     * @ElementName searchCriteriaCallCenterReportTemplateName
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterReportTemplateName
     * @Array
     * @Optional
     * @Group e2c537e3e39483b96620673a7012ffdd:6376
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterReportTemplateName[]
     */
    private $searchCriteriaCallCenterReportTemplateName = array(
        
    );

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
     * Getter for searchCriteriaGroupId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaGroupId;
    }

    /**
     * Setter for searchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[] $searchCriteriaGroupId
     * @return $this
     */
    public function setSearchCriteriaGroupId(array $searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaGroupId()
    {
        $this->searchCriteriaGroupId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId $searchCriteriaGroupId
     * @return $this
     */
    public function addSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId[] = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactCallCenterScheduledReportServiceProvider
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportServiceProvider
     */
    public function getSearchCriteriaExactCallCenterScheduledReportServiceProvider()
    {
        return $this->searchCriteriaExactCallCenterScheduledReportServiceProvider instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaExactCallCenterScheduledReportServiceProvider;
    }

    /**
     * Setter for searchCriteriaExactCallCenterScheduledReportServiceProvider
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportServiceProvider $searchCriteriaExactCallCenterScheduledReportServiceProvider
     * @return $this
     */
    public function setSearchCriteriaExactCallCenterScheduledReportServiceProvider(\CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportServiceProvider $searchCriteriaExactCallCenterScheduledReportServiceProvider)
    {
        $this->searchCriteriaExactCallCenterScheduledReportServiceProvider = $searchCriteriaExactCallCenterScheduledReportServiceProvider;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaExactCallCenterScheduledReportServiceProvider()
    {
        $this->searchCriteriaExactCallCenterScheduledReportServiceProvider = null;
        return $this;
    }

    /**
     * Getter for searchCriteriaServiceProviderId
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[]
     */
    public function getSearchCriteriaServiceProviderId()
    {
        return $this->searchCriteriaServiceProviderId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaServiceProviderId;
    }

    /**
     * Setter for searchCriteriaServiceProviderId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId[] $searchCriteriaServiceProviderId
     * @return $this
     */
    public function setSearchCriteriaServiceProviderId(array $searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId = $searchCriteriaServiceProviderId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaServiceProviderId()
    {
        $this->searchCriteriaServiceProviderId = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaServiceProviderId
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaServiceProviderId $searchCriteriaServiceProviderId
     * @return $this
     */
    public function addSearchCriteriaServiceProviderId($searchCriteriaServiceProviderId)
    {
        $this->searchCriteriaServiceProviderId[] = $searchCriteriaServiceProviderId;
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
     * Getter for searchCriteriaCallCenterReportTemplateName
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterReportTemplateName[]
     */
    public function getSearchCriteriaCallCenterReportTemplateName()
    {
        return $this->searchCriteriaCallCenterReportTemplateName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->searchCriteriaCallCenterReportTemplateName;
    }

    /**
     * Setter for searchCriteriaCallCenterReportTemplateName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterReportTemplateName[] $searchCriteriaCallCenterReportTemplateName
     * @return $this
     */
    public function setSearchCriteriaCallCenterReportTemplateName(array $searchCriteriaCallCenterReportTemplateName)
    {
        $this->searchCriteriaCallCenterReportTemplateName = $searchCriteriaCallCenterReportTemplateName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSearchCriteriaCallCenterReportTemplateName()
    {
        $this->searchCriteriaCallCenterReportTemplateName = null;
        return $this;
    }

    /**
     * Adder for searchCriteriaCallCenterReportTemplateName
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterReportTemplateName $searchCriteriaCallCenterReportTemplateName
     * @return $this
     */
    public function addSearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName)
    {
        $this->searchCriteriaCallCenterReportTemplateName[] = $searchCriteriaCallCenterReportTemplateName;
        return $this;
    }


}

