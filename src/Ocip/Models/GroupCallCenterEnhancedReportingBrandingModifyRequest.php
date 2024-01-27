<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingBrandingModifyRequest
 *
 * Request to modify the group branding configuration.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"4d65d3449061c568639c8cc1e2492285:3311","type":"sequence"}]
 */
class GroupCallCenterEnhancedReportingBrandingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName serviceProviderId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:3311
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $serviceProviderId = null;

    /**
     * @ElementName groupId
     * @Type string
     * @Group 4d65d3449061c568639c8cc1e2492285:3311
     * @MinLength 1
     * @MaxLength 30
     * @var string|null
     */
    protected $groupId = null;

    /**
     * @ElementName brandingChoice
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:3311
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallCenterEnhancedReportingBrandingChoice|null
     */
    protected $brandingChoice = null;

    /**
     * @ElementName brandingFile
     * @Type \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource
     * @Optional
     * @Group 4d65d3449061c568639c8cc1e2492285:3311
     * @var \CWM\BroadWorksConnector\Ocip\Models\LabeledFileResource|null
     */
    protected $brandingFile = null;

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
     * Getter for groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->groupId;
    }

    /**
     * Setter for groupId
     *
     * @param string $groupId
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetGroupId()
    {
        $this->groupId = null;
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

