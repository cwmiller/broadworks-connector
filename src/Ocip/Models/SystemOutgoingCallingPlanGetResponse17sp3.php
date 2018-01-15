<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanGetResponse17sp3
 *
 * Response to SystemOutgoingCallingPlanGetRequest17sp3.
 */
class SystemOutgoingCallingPlanGetResponse17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName directTransferScreening
     * @var bool|null
     */
    private $directTransferScreening = null;

    /**
     * @ElementName enableEnhancedTollCallTyping
     * @var bool|null
     */
    private $enableEnhancedTollCallTyping = null;

    /**
     * Getter for directTransferScreening
     *
     * @ElementName directTransferScreening
     * @return bool|null
     */
    public function getDirectTransferScreening()
    {
        return $this->directTransferScreening;
    }

    /**
     * Setter for directTransferScreening
     *
     * @ElementName directTransferScreening
     * @param bool|null $directTransferScreening
     * @return $this
     */
    public function setDirectTransferScreening($directTransferScreening)
    {
        $this->directTransferScreening = $directTransferScreening;
        return $this;
    }

    /**
     * Getter for enableEnhancedTollCallTyping
     *
     * @ElementName enableEnhancedTollCallTyping
     * @return bool|null
     */
    public function getEnableEnhancedTollCallTyping()
    {
        return $this->enableEnhancedTollCallTyping;
    }

    /**
     * Setter for enableEnhancedTollCallTyping
     *
     * @ElementName enableEnhancedTollCallTyping
     * @param bool|null $enableEnhancedTollCallTyping
     * @return $this
     */
    public function setEnableEnhancedTollCallTyping($enableEnhancedTollCallTyping)
    {
        $this->enableEnhancedTollCallTyping = $enableEnhancedTollCallTyping;
        return $this;
    }


}

