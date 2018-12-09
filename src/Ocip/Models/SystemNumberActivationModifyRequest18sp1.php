<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberActivationModifyRequest18sp1
 *
 * Request to modify system number activation and enterprise trunk number range activation setting.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 *         The following element values are only applicable in AS data mode:
 *           enableEnterpriseTrunkNumberRangeActivation
 *           numberActivationMode = Group And User Activation Enabled will raise an error in XS data mode.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:11269","type":"sequence"}]
 */
class SystemNumberActivationModifyRequest18sp1 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName numberActivationMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:11269
     * @var \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode|null
     */
    private $numberActivationMode = null;

    /**
     * @ElementName enableEnterpriseTrunkNumberRangeActivation
     * @Type bool
     * @Optional
     * @Group b5f5416d9e71f8e4246cda16c4723744:11269
     * @var bool|null
     */
    private $enableEnterpriseTrunkNumberRangeActivation = null;

    /**
     * Getter for numberActivationMode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode
     */
    public function getNumberActivationMode()
    {
        return $this->numberActivationMode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberActivationMode;
    }

    /**
     * Setter for numberActivationMode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode $numberActivationMode
     * @return $this
     */
    public function setNumberActivationMode(\CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode $numberActivationMode)
    {
        $this->numberActivationMode = $numberActivationMode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberActivationMode()
    {
        $this->numberActivationMode = null;
        return $this;
    }

    /**
     * Getter for enableEnterpriseTrunkNumberRangeActivation
     *
     * @return bool
     */
    public function getEnableEnterpriseTrunkNumberRangeActivation()
    {
        return $this->enableEnterpriseTrunkNumberRangeActivation instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableEnterpriseTrunkNumberRangeActivation;
    }

    /**
     * Setter for enableEnterpriseTrunkNumberRangeActivation
     *
     * @param bool $enableEnterpriseTrunkNumberRangeActivation
     * @return $this
     */
    public function setEnableEnterpriseTrunkNumberRangeActivation($enableEnterpriseTrunkNumberRangeActivation)
    {
        $this->enableEnterpriseTrunkNumberRangeActivation = $enableEnterpriseTrunkNumberRangeActivation;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableEnterpriseTrunkNumberRangeActivation()
    {
        $this->enableEnterpriseTrunkNumberRangeActivation = null;
        return $this;
    }


}

