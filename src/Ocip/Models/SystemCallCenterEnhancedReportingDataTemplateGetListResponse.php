<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingDataTemplateGetListResponse
 *
 * Response to SystemCallCenterEnhancedReportingDataTemplateGetListRequest.
 *
 * @see SystemCallCenterEnhancedReportingDataTemplateGetListRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:6029","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingDataTemplateGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName info
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInfo
     * @Array
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:6029
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInfo[]
     */
    protected $info = [
        
    ];

    /**
     * Getter for info
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInfo[]
     */
    public function getInfo()
    {
        return $this->info instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->info;
    }

    /**
     * Setter for info
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInfo[] $info
     * @return $this
     */
    public function setInfo(array $info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInfo()
    {
        $this->info = null;
        return $this;
    }

    /**
     * Adder for info
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInfo $info
     * @return $this
     */
    public function addInfo($info)
    {
        $this->info[] = $info;
        return $this;
    }
}

