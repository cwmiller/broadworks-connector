<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingBrandingGetResponse
 *
 * Response to the EnterpriseCallCenterEnhancedReportingBrandingGetRequest.
 *
 * @see EnterpriseCallCenterEnhancedReportingBrandingGetRequest
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:1220","type":"sequence"}]
 */
class EnterpriseCallCenterEnhancedReportingBrandingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName brandingChoice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice
     * @Group 4d65d3449061c568639c8cc1e2492285:1220
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice|null
     */
    protected $brandingChoice = null;

    /**
     * @ElementName brandingFileDescription
     * @Type string
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:1220
     * @MinLength 1
     * @MaxLength 256
     * @var string|null
     */
    protected $brandingFileDescription = null;

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

