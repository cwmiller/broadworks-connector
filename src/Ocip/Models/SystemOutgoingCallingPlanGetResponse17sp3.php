<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanGetResponse17sp3
 *
 * Response to SystemOutgoingCallingPlanGetRequest17sp3.
 *
 * @see SystemOutgoingCallingPlanGetRequest17sp3
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:985","type":"sequence"}]
 */
class SystemOutgoingCallingPlanGetResponse17sp3 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName directTransferScreening
     * @Type bool
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:985
     * @var bool|null
     */
    protected $directTransferScreening = null;

    /**
     * @ElementName enableEnhancedTollCallTyping
     * @Type bool
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:985
     * @var bool|null
     */
    protected $enableEnhancedTollCallTyping = null;

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

