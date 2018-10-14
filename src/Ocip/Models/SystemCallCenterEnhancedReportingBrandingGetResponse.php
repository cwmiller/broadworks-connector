<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingBrandingGetResponse
 *
 * Response to the SystemCallCenterEnhancedReportingBrandingGetRequest.
 *
 * @see SystemCallCenterEnhancedReportingBrandingGetRequest
 */
class SystemCallCenterEnhancedReportingBrandingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName brandingChoice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingSystemBrandingChoice|null
     */
    private $brandingChoice = null;

    /**
     * @ElementName customBrandingFileDescription
     * @var string|null
     */
    private $customBrandingFileDescription = null;

    /**
     * Getter for brandingChoice
     *
     * @ElementName brandingChoice
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingSystemBrandingChoice|null
     */
    public function getBrandingChoice()
    {
        return $this->brandingChoice;
    }

    /**
     * Setter for brandingChoice
     *
     * @ElementName brandingChoice
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingSystemBrandingChoice|null $brandingChoice
     * @return $this
     */
    public function setBrandingChoice(\CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingSystemBrandingChoice $brandingChoice)
    {
        $this->brandingChoice = $brandingChoice;
        return $this;
    }

    /**
     * Getter for customBrandingFileDescription
     *
     * @ElementName customBrandingFileDescription
     * @return string|null
     */
    public function getCustomBrandingFileDescription()
    {
        return $this->customBrandingFileDescription;
    }

    /**
     * Setter for customBrandingFileDescription
     *
     * @ElementName customBrandingFileDescription
     * @param string|null $customBrandingFileDescription
     * @return $this
     */
    public function setCustomBrandingFileDescription($customBrandingFileDescription)
    {
        $this->customBrandingFileDescription = $customBrandingFileDescription;
        return $this;
    }


}

