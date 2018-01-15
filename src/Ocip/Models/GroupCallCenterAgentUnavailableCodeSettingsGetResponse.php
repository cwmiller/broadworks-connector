<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallCenterAgentUnavailableCodeSettingsGetResponse
 *
 * Response to GroupCallCenterAgentUnavailableCodeSettingsGetRequest.
 *         
 *         Replaced by GroupCallCenterAgentUnavailableCodeSettingsGetResponse17sp4.
 */
class GroupCallCenterAgentUnavailableCodeSettingsGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enableAgentUnavailableCodes
     * @var bool|null
     */
    private $enableAgentUnavailableCodes = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnDND
     * @var string|null
     */
    private $defaultAgentUnavailableCodeOnDND = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnPersonalCalls
     * @var string|null
     */
    private $defaultAgentUnavailableCodeOnPersonalCalls = null;

    /**
     * @ElementName defaultAgentUnavailableCodeOnConsecutiveBounces
     * @var string|null
     */
    private $defaultAgentUnavailableCodeOnConsecutiveBounces = null;

    /**
     * @ElementName forceUseOfAgentUnavailableCodes
     * @var bool|null
     */
    private $forceUseOfAgentUnavailableCodes = null;

    /**
     * @ElementName defaultAgentUnavailableCode
     * @var string|null
     */
    private $defaultAgentUnavailableCode = null;

    /**
     * Getter for enableAgentUnavailableCodes
     *
     * @ElementName enableAgentUnavailableCodes
     * @return bool|null
     */
    public function getEnableAgentUnavailableCodes()
    {
        return $this->enableAgentUnavailableCodes;
    }

    /**
     * Setter for enableAgentUnavailableCodes
     *
     * @ElementName enableAgentUnavailableCodes
     * @param bool|null $enableAgentUnavailableCodes
     * @return $this
     */
    public function setEnableAgentUnavailableCodes($enableAgentUnavailableCodes)
    {
        $this->enableAgentUnavailableCodes = $enableAgentUnavailableCodes;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCodeOnDND
     *
     * @ElementName defaultAgentUnavailableCodeOnDND
     * @return string|null
     */
    public function getDefaultAgentUnavailableCodeOnDND()
    {
        return $this->defaultAgentUnavailableCodeOnDND;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnDND
     *
     * @ElementName defaultAgentUnavailableCodeOnDND
     * @param string|null $defaultAgentUnavailableCodeOnDND
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnDND($defaultAgentUnavailableCodeOnDND)
    {
        $this->defaultAgentUnavailableCodeOnDND = $defaultAgentUnavailableCodeOnDND;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCodeOnPersonalCalls
     *
     * @ElementName defaultAgentUnavailableCodeOnPersonalCalls
     * @return string|null
     */
    public function getDefaultAgentUnavailableCodeOnPersonalCalls()
    {
        return $this->defaultAgentUnavailableCodeOnPersonalCalls;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnPersonalCalls
     *
     * @ElementName defaultAgentUnavailableCodeOnPersonalCalls
     * @param string|null $defaultAgentUnavailableCodeOnPersonalCalls
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnPersonalCalls($defaultAgentUnavailableCodeOnPersonalCalls)
    {
        $this->defaultAgentUnavailableCodeOnPersonalCalls = $defaultAgentUnavailableCodeOnPersonalCalls;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCodeOnConsecutiveBounces
     *
     * @ElementName defaultAgentUnavailableCodeOnConsecutiveBounces
     * @return string|null
     */
    public function getDefaultAgentUnavailableCodeOnConsecutiveBounces()
    {
        return $this->defaultAgentUnavailableCodeOnConsecutiveBounces;
    }

    /**
     * Setter for defaultAgentUnavailableCodeOnConsecutiveBounces
     *
     * @ElementName defaultAgentUnavailableCodeOnConsecutiveBounces
     * @param string|null $defaultAgentUnavailableCodeOnConsecutiveBounces
     * @return $this
     */
    public function setDefaultAgentUnavailableCodeOnConsecutiveBounces($defaultAgentUnavailableCodeOnConsecutiveBounces)
    {
        $this->defaultAgentUnavailableCodeOnConsecutiveBounces = $defaultAgentUnavailableCodeOnConsecutiveBounces;
        return $this;
    }

    /**
     * Getter for forceUseOfAgentUnavailableCodes
     *
     * @ElementName forceUseOfAgentUnavailableCodes
     * @return bool|null
     */
    public function getForceUseOfAgentUnavailableCodes()
    {
        return $this->forceUseOfAgentUnavailableCodes;
    }

    /**
     * Setter for forceUseOfAgentUnavailableCodes
     *
     * @ElementName forceUseOfAgentUnavailableCodes
     * @param bool|null $forceUseOfAgentUnavailableCodes
     * @return $this
     */
    public function setForceUseOfAgentUnavailableCodes($forceUseOfAgentUnavailableCodes)
    {
        $this->forceUseOfAgentUnavailableCodes = $forceUseOfAgentUnavailableCodes;
        return $this;
    }

    /**
     * Getter for defaultAgentUnavailableCode
     *
     * @ElementName defaultAgentUnavailableCode
     * @return string|null
     */
    public function getDefaultAgentUnavailableCode()
    {
        return $this->defaultAgentUnavailableCode;
    }

    /**
     * Setter for defaultAgentUnavailableCode
     *
     * @ElementName defaultAgentUnavailableCode
     * @param string|null $defaultAgentUnavailableCode
     * @return $this
     */
    public function setDefaultAgentUnavailableCode($defaultAgentUnavailableCode)
    {
        $this->defaultAgentUnavailableCode = $defaultAgentUnavailableCode;
        return $this;
    }


}

