<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingScheduledReportGetListRequest
 *
 * Request to get the list of all call center reporting scheduled reports in the
 * system.
 *         The response is either an
 * SystemCallCenterEnhancedReportingScheduledReportGetListResponse or an
 * ErrorResponse.
 */
class SystemCallCenterEnhancedReportingScheduledReportGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName responseSizeLimit
     * @var int|null
     */
    private $responseSizeLimit = null;

    /**
     * @ElementName searchCriteriaCallCenterScheduledReportName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName[]
     */
    private $searchCriteriaCallCenterScheduledReportName = array(
        
    );

    /**
     * @ElementName searchCriteriaGroupId
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    private $searchCriteriaGroupId = array(
        
    );

    /**
     * @ElementName searchCriteriaExactCallCenterScheduledReportServiceProvider
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportServiceProvider|null
     */
    private $searchCriteriaExactCallCenterScheduledReportServiceProvider = null;

    /**
     * @ElementName searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor|null
     */
    private $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = null;

    /**
     * @ElementName searchCriteriaCallCenterReportTemplateName
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterReportTemplateName[]
     */
    private $searchCriteriaCallCenterReportTemplateName = array(
        
    );

    /**
     * Getter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @return int|null
     */
    public function getResponseSizeLimit()
    {
        return $this->responseSizeLimit;
    }

    /**
     * Setter for responseSizeLimit
     *
     * @ElementName responseSizeLimit
     * @param int|null $responseSizeLimit
     * @return $this
     */
    public function setResponseSizeLimit($responseSizeLimit)
    {
        $this->responseSizeLimit = $responseSizeLimit;
        return $this;
    }

    /**
     * Getter for searchCriteriaCallCenterScheduledReportName
     *
     * @ElementName searchCriteriaCallCenterScheduledReportName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName[]
     */
    public function getSearchCriteriaCallCenterScheduledReportName()
    {
        return $this->searchCriteriaCallCenterScheduledReportName;
    }

    /**
     * Setter for searchCriteriaCallCenterScheduledReportName
     *
     * @ElementName searchCriteriaCallCenterScheduledReportName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName[] $searchCriteriaCallCenterScheduledReportName
     * @return $this
     */
    public function setSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName)
    {
        $this->searchCriteriaCallCenterScheduledReportName = $searchCriteriaCallCenterScheduledReportName;
        return $this;
    }

    /**
     * Adder for searchCriteriaCallCenterScheduledReportName
     *
     * @ElementName searchCriteriaCallCenterScheduledReportName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterScheduledReportName $searchCriteriaCallCenterScheduledReportName
     * @return $this
     */
    public function addSearchCriteriaCallCenterScheduledReportName($searchCriteriaCallCenterScheduledReportName)
    {
        $this->searchCriteriaCallCenterScheduledReportName []= $searchCriteriaCallCenterScheduledReportName;
        return $this;
    }

    /**
     * Getter for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[]
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId;
    }

    /**
     * Setter for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId[] $searchCriteriaGroupId
     * @return $this
     */
    public function setSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId = $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Adder for searchCriteriaGroupId
     *
     * @ElementName searchCriteriaGroupId
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaGroupId $searchCriteriaGroupId
     * @return $this
     */
    public function addSearchCriteriaGroupId($searchCriteriaGroupId)
    {
        $this->searchCriteriaGroupId []= $searchCriteriaGroupId;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactCallCenterScheduledReportServiceProvider
     *
     * @ElementName searchCriteriaExactCallCenterScheduledReportServiceProvider
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportServiceProvider|null
     */
    public function getSearchCriteriaExactCallCenterScheduledReportServiceProvider()
    {
        return $this->searchCriteriaExactCallCenterScheduledReportServiceProvider;
    }

    /**
     * Setter for searchCriteriaExactCallCenterScheduledReportServiceProvider
     *
     * @ElementName searchCriteriaExactCallCenterScheduledReportServiceProvider
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportServiceProvider|null $searchCriteriaExactCallCenterScheduledReportServiceProvider
     * @return $this
     */
    public function setSearchCriteriaExactCallCenterScheduledReportServiceProvider($searchCriteriaExactCallCenterScheduledReportServiceProvider)
    {
        $this->searchCriteriaExactCallCenterScheduledReportServiceProvider = $searchCriteriaExactCallCenterScheduledReportServiceProvider;
        return $this;
    }

    /**
     * Getter for searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     *
     * @ElementName searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor|null
     */
    public function getSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor()
    {
        return $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
    }

    /**
     * Setter for searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     *
     * @ElementName searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor|null $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor
     * @return $this
     */
    public function setSearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor)
    {
        $this->searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor = $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor;
        return $this;
    }

    /**
     * Getter for searchCriteriaCallCenterReportTemplateName
     *
     * @ElementName searchCriteriaCallCenterReportTemplateName
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterReportTemplateName[]
     */
    public function getSearchCriteriaCallCenterReportTemplateName()
    {
        return $this->searchCriteriaCallCenterReportTemplateName;
    }

    /**
     * Setter for searchCriteriaCallCenterReportTemplateName
     *
     * @ElementName searchCriteriaCallCenterReportTemplateName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterReportTemplateName[] $searchCriteriaCallCenterReportTemplateName
     * @return $this
     */
    public function setSearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName)
    {
        $this->searchCriteriaCallCenterReportTemplateName = $searchCriteriaCallCenterReportTemplateName;
        return $this;
    }

    /**
     * Adder for searchCriteriaCallCenterReportTemplateName
     *
     * @ElementName searchCriteriaCallCenterReportTemplateName
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchCriteriaCallCenterReportTemplateName $searchCriteriaCallCenterReportTemplateName
     * @return $this
     */
    public function addSearchCriteriaCallCenterReportTemplateName($searchCriteriaCallCenterReportTemplateName)
    {
        $this->searchCriteriaCallCenterReportTemplateName []= $searchCriteriaCallCenterReportTemplateName;
        return $this;
    }


}
