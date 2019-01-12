<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemOutgoingCallingPlanModifyRequest
 *
 * Modify the system level data associated with Outgoing Calling Plan.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"6f793dfca9bd3d121bb35e0f9cf1cb2e:1001","type":"sequence"}]
 */
class SystemOutgoingCallingPlanModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName directTransferScreening
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1001
     * @var bool|null
     */
    private $directTransferScreening = null;

    /**
     * @ElementName enableEnhancedTollCallTyping
     * @Type bool
     * @Optional
     * @Group 6f793dfca9bd3d121bb35e0f9cf1cb2e:1001
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

