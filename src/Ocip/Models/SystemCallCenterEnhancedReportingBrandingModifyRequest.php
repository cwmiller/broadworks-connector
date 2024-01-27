<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingBrandingModifyRequest
 *
 * Request to modify the system branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:5999","type":"sequence"}]
 */
class SystemCallCenterEnhancedReportingBrandingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName brandingChoice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingSystemBrandingChoice
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5999
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingSystemBrandingChoice|null
     */
    protected $brandingChoice = null;

    /**
     * @ElementName customBrandingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:5999
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    protected $customBrandingFile = null;

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
     * Getter for customBrandingFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getCustomBrandingFile()
    {
        return $this->customBrandingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->customBrandingFile;
    }

    /**
     * Setter for customBrandingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $customBrandingFile
     * @return $this
     */
    public function setCustomBrandingFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $customBrandingFile)
    {
        $this->customBrandingFile = $customBrandingFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCustomBrandingFile()
    {
        $this->customBrandingFile = null;
        return $this;
    }
}

