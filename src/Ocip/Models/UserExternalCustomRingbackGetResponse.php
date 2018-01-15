<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExternalCustomRingbackGetResponse
 *
 * Response to UserExternalCustomRingbackGetRequest.
 */
class UserExternalCustomRingbackGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName useSettingLevel
     * @var string|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName sipRequestURI
     * @var string|null
     */
    private $sipRequestURI = null;

    /**
     * Getter for isActive
     *
     * @ElementName isActive
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @ElementName isActive
     * @param bool|null $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * Getter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @return string|null
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @ElementName useSettingLevel
     * @param string|null $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel($useSettingLevel)
    {
        $this->useSettingLevel = $useSettingLevel;
        return $this;
    }

    /**
     * Getter for sipRequestURI
     *
     * @ElementName sipRequestURI
     * @return string|null
     */
    public function getSipRequestURI()
    {
        return $this->sipRequestURI;
    }

    /**
     * Setter for sipRequestURI
     *
     * @ElementName sipRequestURI
     * @param string|null $sipRequestURI
     * @return $this
     */
    public function setSipRequestURI($sipRequestURI)
    {
        $this->sipRequestURI = $sipRequestURI;
        return $this;
    }


}

