<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberActivationGetResponse21
 *
 * Response to SystemNumberActivationGetRequest21.
 *         Contains the system number activation and enterprise trunk number range
 * activation setting.
 *
 * @see SystemNumberActivationGetRequest21
 */
class SystemNumberActivationGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName numberActivationMode
     * @var \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode|null
     */
    private $numberActivationMode = null;

    /**
     * @ElementName enableEnterpriseTrunkNumberRangeActivation
     * @var bool|null
     */
    private $enableEnterpriseTrunkNumberRangeActivation = null;

    /**
     * Getter for numberActivationMode
     *
     * @ElementName numberActivationMode
     * @return \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode|null
     */
    public function getNumberActivationMode()
    {
        return $this->numberActivationMode;
    }

    /**
     * Setter for numberActivationMode
     *
     * @ElementName numberActivationMode
     * @param \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode|null $numberActivationMode
     * @return $this
     */
    public function setNumberActivationMode(\CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode $numberActivationMode)
    {
        $this->numberActivationMode = $numberActivationMode;
        return $this;
    }

    /**
     * Getter for enableEnterpriseTrunkNumberRangeActivation
     *
     * @ElementName enableEnterpriseTrunkNumberRangeActivation
     * @return bool|null
     */
    public function getEnableEnterpriseTrunkNumberRangeActivation()
    {
        return $this->enableEnterpriseTrunkNumberRangeActivation;
    }

    /**
     * Setter for enableEnterpriseTrunkNumberRangeActivation
     *
     * @ElementName enableEnterpriseTrunkNumberRangeActivation
     * @param bool|null $enableEnterpriseTrunkNumberRangeActivation
     * @return $this
     */
    public function setEnableEnterpriseTrunkNumberRangeActivation($enableEnterpriseTrunkNumberRangeActivation)
    {
        $this->enableEnterpriseTrunkNumberRangeActivation = $enableEnterpriseTrunkNumberRangeActivation;
        return $this;
    }


}

