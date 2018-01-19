<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberActivationGetResponse21
 *
 * Response to SystemNumberActivationGetRequest21.
 *         Contains the system number activation and enterprise trunk number range
 * activation setting.
 */
class SystemNumberActivationGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName numberActivationMode
     * @var string|null
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
     * @return string|null
     */
    public function getNumberActivationMode()
    {
        return $this->numberActivationMode;
    }

    /**
     * Setter for numberActivationMode
     *
     * @ElementName numberActivationMode
     * @param string|null $numberActivationMode
     * @return $this
     */
    public function setNumberActivationMode($numberActivationMode)
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
