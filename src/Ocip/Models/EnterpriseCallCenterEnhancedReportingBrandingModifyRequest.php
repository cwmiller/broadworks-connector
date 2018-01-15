<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * EnterpriseCallCenterEnhancedReportingBrandingModifyRequest
 *
 * Request to modify the enterprise branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseCallCenterEnhancedReportingBrandingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName brandingChoice
     * @var string|null
     */
    private $brandingChoice = null;

    /**
     * @ElementName brandingFile
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    private $brandingFile = null;

    /**
     * Getter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @return string|null
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId;
    }

    /**
     * Setter for serviceProviderId
     *
     * @ElementName serviceProviderId
     * @param string|null $serviceProviderId
     * @return $this
     */
    public function setServiceProviderId($serviceProviderId)
    {
        $this->serviceProviderId = $serviceProviderId;
        return $this;
    }

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
     * Getter for brandingFile
     *
     * @ElementName brandingFile
     * @return \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    public function getBrandingFile()
    {
        return $this->brandingFile;
    }

    /**
     * Setter for brandingFile
     *
     * @ElementName brandingFile
     * @param \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null $brandingFile
     * @return $this
     */
    public function setBrandingFile($brandingFile)
    {
        $this->brandingFile = $brandingFile;
        return $this;
    }


}

