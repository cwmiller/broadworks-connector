<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingBrandingModifyRequest
 *
 * Request to modify the enterprise branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class EnterpriseCallCenterEnhancedReportingBrandingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @Type string
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName brandingChoice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice|null
     */
    private $brandingChoice = null;

    /**
     * @ElementName brandingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $brandingFile = null;

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
     * Getter for brandingFile
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     */
    public function getBrandingFile()
    {
        return $this->brandingFile instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->brandingFile;
    }

    /**
     * Setter for brandingFile
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $brandingFile
     * @return $this
     */
    public function setBrandingFile(\CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource $brandingFile)
    {
        $this->brandingFile = $brandingFile;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBrandingFile()
    {
        $this->brandingFile = null;
        return $this;
    }


}

