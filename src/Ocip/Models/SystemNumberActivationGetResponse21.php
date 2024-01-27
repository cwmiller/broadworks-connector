<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberActivationGetResponse21
 *
 * Response to SystemNumberActivationGetRequest21.
 *         Contains the system number activation and enterprise trunk number range activation setting.
 *
 * @see SystemNumberActivationGetRequest21
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:13127","type":"sequence"}]
 */
class SystemNumberActivationGetResponse21 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName numberActivationMode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode
     * @Group da582a1f8028404e70d260cf1f891033:13127
     * @var \CWM\BroadWorksConnector\Ocip\Models\NumberActivationMode|null
     */
    protected $numberActivationMode = null;

    /**
     * @ElementName enableEnterpriseTrunkNumberRangeActivation
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:13127
     * @var bool|null
     */
    protected $enableEnterpriseTrunkNumberRangeActivation = null;

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

