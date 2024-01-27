<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingBrandingGetResponse
 *
 * Response to the SystemCallCenterEnhancedReportingBrandingGetRequest.
 *
 * @see SystemCallCenterEnhancedReportingBrandingGetRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:5982","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingBrandingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName brandingChoice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingSystemBrandingChoice
     * @Group 4d65d3449061c568639c8cc1e2492285:5982
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingSystemBrandingChoice|null
     */
    protected $brandingChoice = null;

    /**
     * @ElementName customBrandingFileDescription
     * @Type string
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5982
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $customBrandingFileDescription = null;

    /**
     * Getter for brandingChoice
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingSystemBrandingChoice
     */
    public function getBrandingChoice()
    {
        return $this->brandingChoice instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->brandingChoice;
    }

    /**
     * Setter for brandingChoice
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingSystemBrandingChoice $brandingChoice
     * @return $this
     */
    public function setBrandingChoice(\CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingSystemBrandingChoice $brandingChoice)
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
     * Getter for customBrandingFileDescription
     *
     * @return string
     */
    public function getCustomBrandingFileDescription()
    {
        return $this->customBrandingFileDescription instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customBrandingFileDescription;
    }

    /**
     * Setter for customBrandingFileDescription
     *
     * @param string $customBrandingFileDescription
     * @return $this
     */
    public function setCustomBrandingFileDescription($customBrandingFileDescription)
    {
        $this->customBrandingFileDescription = $customBrandingFileDescription;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomBrandingFileDescription()
    {
        $this->customBrandingFileDescription = null;
        return $this;
    }
}

