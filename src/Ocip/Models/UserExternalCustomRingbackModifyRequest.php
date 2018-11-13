<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExternalCustomRingbackModifyRequest
 *
 * Modify the user level data associated with External Custom Ringback.  
 *         The user SIP URI, when selected, it replaces the SP address, port and
 * prefix.  
 *         The user SIP URI, if selected, is the Request URI of the SIP INVITE sent
 *
 *         to the external server.  When the service provider data is used instead,
 *
 *         the Request URI is constructed using the prefix, address, port and the
 * user DN.  
 *         The timeout value is the only SP configuration used when the user SIP
 * URI is selected.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserExternalCustomRingbackModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName useSettingLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExternalCustomRingbackSettingLevel
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExternalCustomRingbackSettingLevel|null
     */
    private $useSettingLevel = null;

    /**
     * @ElementName sipRequestURI
     * @Type string
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipRequestURI = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

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
     * @return string|null
     */
    public function getSipRequestURI()
    {
        return $this->sipRequestURI instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->sipRequestURI;
    }

    /**
     * Setter for sipRequestURI
     *
     * @param string|null $sipRequestURI
     * @return $this
     */
    public function setSipRequestURI($sipRequestURI)
    {
        if ($sipRequestURI === null) {
            $this->sipRequestURI = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->sipRequestURI = $sipRequestURI;
        }
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

