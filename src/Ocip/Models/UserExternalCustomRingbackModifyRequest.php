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
     * @var string|null
     */
    private $userId = null;

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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $sipRequestURI = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getSipRequestURI()
    {
        return $this->sipRequestURI;
    }

    /**
     * Setter for sipRequestURI
     *
     * @ElementName sipRequestURI
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $sipRequestURI
     * @return $this
     */
    public function setSipRequestURI($sipRequestURI)
    {
        $this->sipRequestURI = $sipRequestURI;
        return $this;
    }


}

