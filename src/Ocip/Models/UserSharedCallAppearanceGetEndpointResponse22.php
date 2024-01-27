<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceGetEndpointResponse22
 *
 * Response to the UserSharedCallAppearanceGetEndpointRequest.
 *
 *         The following elements are only used in AS data mode and not returned in XS data mode:
 *           hotlineContact
 *
 *         The following elements are only used in AS data mode and a value false is returned in the XS mode:
 *           useHotline
 *
 * @see UserSharedCallAppearanceGetEndpointRequest
 * @Groups [{"id":"4e9808afa6161bba01df39d17a849c79:112","type":"sequence"}]
 */
class UserSharedCallAppearanceGetEndpointResponse22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName isActive
     * @Type bool
     * @Group 4e9808afa6161bba01df39d17a849c79:112
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName allowOrigination
     * @Type bool
     * @Group 4e9808afa6161bba01df39d17a849c79:112
     * @var bool|null
     */
    protected $allowOrigination = null;

    /**
     * @ElementName allowTermination
     * @Type bool
     * @Group 4e9808afa6161bba01df39d17a849c79:112
     * @var bool|null
     */
    protected $allowTermination = null;

    /**
     * @ElementName useHotline
     * @Type bool
     * @Group 4e9808afa6161bba01df39d17a849c79:112
     * @var bool|null
     */
    protected $useHotline = null;

    /**
     * @ElementName hotlineContact
     * @Type string
     * @Optional
     * @Group 4e9808afa6161bba01df39d17a849c79:112
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $hotlineContact = null;

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
     * Getter for allowOrigination
     *
     * @return bool
     */
    public function getAllowOrigination()
    {
        return $this->allowOrigination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowOrigination;
    }

    /**
     * Setter for allowOrigination
     *
     * @param bool $allowOrigination
     * @return $this
     */
    public function setAllowOrigination($allowOrigination)
    {
        $this->allowOrigination = $allowOrigination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowOrigination()
    {
        $this->allowOrigination = null;
        return $this;
    }

    /**
     * Getter for allowTermination
     *
     * @return bool
     */
    public function getAllowTermination()
    {
        return $this->allowTermination instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->allowTermination;
    }

    /**
     * Setter for allowTermination
     *
     * @param bool $allowTermination
     * @return $this
     */
    public function setAllowTermination($allowTermination)
    {
        $this->allowTermination = $allowTermination;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAllowTermination()
    {
        $this->allowTermination = null;
        return $this;
    }

    /**
     * Getter for useHotline
     *
     * @return bool
     */
    public function getUseHotline()
    {
        return $this->useHotline instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useHotline;
    }

    /**
     * Setter for useHotline
     *
     * @param bool $useHotline
     * @return $this
     */
    public function setUseHotline($useHotline)
    {
        $this->useHotline = $useHotline;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseHotline()
    {
        $this->useHotline = null;
        return $this;
    }

    /**
     * Getter for hotlineContact
     *
     * @return string
     */
    public function getHotlineContact()
    {
        return $this->hotlineContact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->hotlineContact;
    }

    /**
     * Setter for hotlineContact
     *
     * @param string $hotlineContact
     * @return $this
     */
    public function setHotlineContact($hotlineContact)
    {
        $this->hotlineContact = $hotlineContact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetHotlineContact()
    {
        $this->hotlineContact = null;
        return $this;
    }
}

