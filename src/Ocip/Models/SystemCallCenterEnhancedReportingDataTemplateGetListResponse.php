<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingDataTemplateGetListResponse
 *
 * Response to SystemCallCenterEnhancedReportingDataTemplateGetListRequest.
 */
class SystemCallCenterEnhancedReportingDataTemplateGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName info
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInfo[]
     */
    private $info = array(
        
    );

    /**
     * Getter for info
     *
     * @ElementName info
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInfo[]
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Setter for info
     *
     * @ElementName info
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInfo[] $info
     * @return $this
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * Adder for info
     *
     * @ElementName info
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterReportDataTemplateInfo $info
     * @return $this
     */
    public function addInfo($info)
    {
        $this->info []= $info;
        return $this;
    }


}

