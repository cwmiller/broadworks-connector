<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceGetEndpointResponse
 *
 * Response to the UserSharedCallAppearanceGetEndpointRequest.
 *         Replaced by: UserSharedCallAppearanceGetEndpointResponse21 in XS data mode
 *
 * @see UserSharedCallAppearanceGetEndpointRequest
 * @see UserSharedCallAppearanceGetEndpointResponse21
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:46135","type":"sequence"}]
 */
class UserSharedCallAppearanceGetEndpointResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46135
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName allowOrigination
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46135
     * @var bool|null
     */
    protected $allowOrigination = null;

    /**
     * @ElementName allowTermination
     * @Type bool
     * @Group ab0042aa512abc10edb3c55e4b416b0b:46135
     * @var bool|null
     */
    protected $allowTermination = null;

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


}

