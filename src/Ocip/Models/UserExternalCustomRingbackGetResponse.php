<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExternalCustomRingbackGetResponse
 *
 * Response to UserExternalCustomRingbackGetRequest.
 *
 * @see UserExternalCustomRingbackGetRequest
 * @Groups [{"id":"2c9f194a3272e429f2e5215dd988b94a:116","type":"sequence"}]
 */
class UserExternalCustomRingbackGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 2c9f194a3272e429f2e5215dd988b94a:116
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName useSettingLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExternalCustomRingbackSettingLevel
     * @Group 2c9f194a3272e429f2e5215dd988b94a:116
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExternalCustomRingbackSettingLevel|null
     */
    protected $useSettingLevel = null;

    /**
     * @ElementName sipRequestURI
     * @Type string
     * @Optional
     * @Group 2c9f194a3272e429f2e5215dd988b94a:116
     * @MinLength 1
     * @MaxLength 1020
     * @var string|null
     */
    protected $sipRequestURI = null;

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for useSettingLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExternalCustomRingbackSettingLevel
     */
    public function getUseSettingLevel()
    {
        return $this->useSettingLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useSettingLevel;
    }

    /**
     * Setter for useSettingLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExternalCustomRingbackSettingLevel $useSettingLevel
     * @return $this
     */
    public function setUseSettingLevel(\CWM\BroadWorksConnector\Ocip\Models\ExternalCustomRingbackSettingLevel $useSettingLevel)
    {
        $this->useSettingLevel = $useSettingLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseSettingLevel()
    {
        $this->useSettingLevel = null;
        return $this;
    }

    /**
     * Getter for sipRequestURI
     *
     * @return string
     */
    public function getSipRequestURI()
    {
        return $this->sipRequestURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipRequestURI;
    }

    /**
     * Setter for sipRequestURI
     *
     * @param string $sipRequestURI
     * @return $this
     */
    public function setSipRequestURI($sipRequestURI)
    {
        $this->sipRequestURI = $sipRequestURI;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSipRequestURI()
    {
        $this->sipRequestURI = null;
        return $this;
    }
}

