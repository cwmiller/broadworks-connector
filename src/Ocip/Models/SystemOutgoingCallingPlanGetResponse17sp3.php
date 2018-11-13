<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanGetResponse17sp3
 *
 * Response to SystemOutgoingCallingPlanGetRequest17sp3.
 *
 * @see SystemOutgoingCallingPlanGetRequest17sp3
 */
class SystemOutgoingCallingPlanGetResponse17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName directTransferScreening
     * @Type bool
     * @var bool|null
     */
    private $directTransferScreening = null;

    /**
     * @ElementName enableEnhancedTollCallTyping
     * @Type bool
     * @var bool|null
     */
    private $enableEnhancedTollCallTyping = null;

    /**
     * Getter for directTransferScreening
     *
     * @return bool
     */
    public function getDirectTransferScreening()
    {
        return $this->directTransferScreening instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->directTransferScreening;
    }

    /**
     * Setter for directTransferScreening
     *
     * @param bool $directTransferScreening
     * @return $this
     */
    public function setDirectTransferScreening($directTransferScreening)
    {
        $this->directTransferScreening = $directTransferScreening;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDirectTransferScreening()
    {
        $this->directTransferScreening = null;
        return $this;
    }

    /**
     * Getter for enableEnhancedTollCallTyping
     *
     * @return bool
     */
    public function getEnableEnhancedTollCallTyping()
    {
        return $this->enableEnhancedTollCallTyping instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableEnhancedTollCallTyping;
    }

    /**
     * Setter for enableEnhancedTollCallTyping
     *
     * @param bool $enableEnhancedTollCallTyping
     * @return $this
     */
    public function setEnableEnhancedTollCallTyping($enableEnhancedTollCallTyping)
    {
        $this->enableEnhancedTollCallTyping = $enableEnhancedTollCallTyping;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableEnhancedTollCallTyping()
    {
        $this->enableEnhancedTollCallTyping = null;
        return $this;
    }


}

