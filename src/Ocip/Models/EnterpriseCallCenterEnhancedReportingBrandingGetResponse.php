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
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice|null
     */
    private $brandingChoice = null;

    /**
     * @ElementName brandingFileDescription
     * @var string|null
     */
    private $brandingFileDescription = null;

    /**
     * Getter for brandingChoice
     *
     * @ElementName brandingChoice
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice|null
     */
    public function getBrandingChoice()
    {
        return $this->brandingChoice;
    }

    /**
     * Setter for brandingChoice
     *
     * @ElementName brandingChoice
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice|null $brandingChoice
     * @return $this
     */
    public function setBrandingChoice(\CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice $brandingChoice)
    {
        $this->brandingChoice = $brandingChoice;
        return $this;
    }

    /**
     * Getter for brandingFileDescription
     *
     * @ElementName brandingFileDescription
     * @return string|null
     */
    public function getBrandingFileDescription()
    {
        return $this->brandingFileDescription;
    }

    /**
     * Setter for brandingFileDescription
     *
     * @ElementName brandingFileDescription
     * @param string|null $brandingFileDescription
     * @return $this
     */
    public function setBrandingFileDescription($brandingFileDescription)
    {
        $this->brandingFileDescription = $brandingFileDescription;
        return $this;
    }


}

