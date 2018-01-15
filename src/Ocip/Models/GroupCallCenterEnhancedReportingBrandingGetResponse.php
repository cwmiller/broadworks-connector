<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterEnhancedReportingBrandingGetResponse
 *
 * Response to the GroupCallCenterEnhancedReportingBrandingGetRequest.
 */
class GroupCallCenterEnhancedReportingBrandingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName brandingChoice
     * @var string|null
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

