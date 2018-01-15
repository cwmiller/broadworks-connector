<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallCenterEnhancedReportingBrandingModifyRequest
 *
 * Request to modify the system branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallCenterEnhancedReportingBrandingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName brandingChoice
     * @var string|null
     */
    private $brandingChoice = null;

    /**
     * @ElementName customBrandingFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $customBrandingFile = null;

    /**
     * Getter for brandingChoice
     *
     * @ElementName brandingChoice
     * @return string|null
     */
    public function getBrandingChoice()
    {
        return $this->brandingChoice;
    }

    /**
     * Setter for brandingChoice
     *
     * @ElementName brandingChoice
     * @param string|null $brandingChoice
     * @return $this
     */
    public function setBrandingChoice($brandingChoice)
    {
        $this->brandingChoice = $brandingChoice;
        return $this;
    }

    /**
     * Getter for customBrandingFile
     *
     * @ElementName customBrandingFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    public function getCustomBrandingFile()
    {
        return $this->customBrandingFile;
    }

    /**
     * Setter for customBrandingFile
     *
     * @ElementName customBrandingFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null $customBrandingFile
     * @return $this
     */
    public function setCustomBrandingFile($customBrandingFile)
    {
        $this->customBrandingFile = $customBrandingFile;
        return $this;
    }


}

