<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingBrandingGetResponse
 *
 * Response to the EnterpriseCallCenterEnhancedReportingBrandingGetRequest.
 *
 * @see EnterpriseCallCenterEnhancedReportingBrandingGetRequest
 */
class EnterpriseCallCenterEnhancedReportingBrandingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName brandingChoice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice|null
     */
    private $brandingChoice = null;

    /**
     * @ElementName brandingFileDescription
     * @Type string
     * @var string|null
     */
    private $brandingFileDescription = null;

    /**
     * Getter for brandingChoice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice
     */
    public function getBrandingChoice()
    {
        return $this->brandingChoice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->brandingChoice;
    }

    /**
     * Setter for brandingChoice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice $brandingChoice
     * @return $this
     */
    public function setBrandingChoice(\CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice $brandingChoice)
    {
        $this->brandingChoice = $brandingChoice;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBrandingChoice()
    {
        $this->brandingChoice = null;
        return $this;
    }

    /**
     * Getter for brandingFileDescription
     *
     * @return string
     */
    public function getBrandingFileDescription()
    {
        return $this->brandingFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->brandingFileDescription;
    }

    /**
     * Setter for brandingFileDescription
     *
     * @param string $brandingFileDescription
     * @return $this
     */
    public function setBrandingFileDescription($brandingFileDescription)
    {
        $this->brandingFileDescription = $brandingFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBrandingFileDescription()
    {
        $this->brandingFileDescription = null;
        return $this;
    }


}

