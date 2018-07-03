<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSharedCallAppearanceGetEndpointResponse
 *
 * Response to the UserSharedCallAppearanceGetEndpointRequest.
 *
 * @see UserSharedCallAppearanceGetEndpointRequest
 */
class UserSharedCallAppearanceGetEndpointResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName allowOrigination
     * @var bool|null
     */
    private $allowOrigination = null;

    /**
     * @ElementName allowTermination
     * @var bool|null
     */
    private $allowTermination = null;

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
     * Getter for allowOrigination
     *
     * @ElementName allowOrigination
     * @return bool|null
     */
    public function getAllowOrigination()
    {
        return $this->allowOrigination;
    }

    /**
     * Setter for allowOrigination
     *
     * @ElementName allowOrigination
     * @param bool|null $allowOrigination
     * @return $this
     */
    public function setAllowOrigination($allowOrigination)
    {
        $this->allowOrigination = $allowOrigination;
        return $this;
    }

    /**
     * Getter for allowTermination
     *
     * @ElementName allowTermination
     * @return bool|null
     */
    public function getAllowTermination()
    {
        return $this->allowTermination;
    }

    /**
     * Setter for allowTermination
     *
     * @ElementName allowTermination
     * @param bool|null $allowTermination
     * @return $this
     */
    public function setAllowTermination($allowTermination)
    {
        $this->allowTermination = $allowTermination;
        return $this;
    }


}

