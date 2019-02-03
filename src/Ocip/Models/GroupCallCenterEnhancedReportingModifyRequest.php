<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingModifyRequest
 *
 * Request to modify group level call center enhanced reporting settings.
 *                 The response is either a SuccessResponse or an ErrorResponse.
 *
 *                 Replaced by GroupCallCenterEnhancedReportingModifyRequest19
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @see GroupCallCenterEnhancedReportingModifyRequest19
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:24576","type":"sequence"}]
 */
class GroupCallCenterEnhancedReportingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:24576
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:24576
     * @var string|null
     */
    private $groupId = null;

    /**
     * @ElementName reportingServer
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:24576
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice|null
     */
    private $reportingServer = null;

    /**
     * @ElementName webStatisticSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource
     * @Optional
     * @Group ab0042aa512abc10edb3c55e4b416b0b:24576
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource|null
     */
    private $webStatisticSource = null;

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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
        return $this;
    }

    /**
     * Getter for reportingServer
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice
     */
    public function getReportingServer()
    {
        return $this->reportingServer instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->reportingServer;
    }

    /**
     * Setter for reportingServer
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice $reportingServer
     * @return $this
     */
    public function setReportingServer(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportServerChoice $reportingServer)
    {
        $this->reportingServer = $reportingServer;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetReportingServer()
    {
        $this->reportingServer = null;
        return $this;
    }

    /**
     * Getter for webStatisticSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource
     */
    public function getWebStatisticSource()
    {
        return $this->webStatisticSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->webStatisticSource;
    }

    /**
     * Setter for webStatisticSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource $webStatisticSource
     * @return $this
     */
    public function setWebStatisticSource(\CWM\BroadWorksConnector\Ocip\Models\CallCenterReportWebStatisticsSource $webStatisticSource)
    {
        $this->webStatisticSource = $webStatisticSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetWebStatisticSource()
    {
        $this->webStatisticSource = null;
        return $this;
    }


}

