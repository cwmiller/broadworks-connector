<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingBrandingModifyRequest
 *
 * Request to modify the group branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterEnhancedReportingBrandingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName serviceProviderId
     * @var string|null
     */
    private $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @var string|null
     */
    private $groupId = null;

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
     * Getter for groupId
     *
     * @ElementName groupId
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @ElementName groupId
     * @param string|null $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
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

