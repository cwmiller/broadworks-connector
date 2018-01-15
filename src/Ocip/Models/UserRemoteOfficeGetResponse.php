<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRemoteOfficeGetResponse
 *
 * Response to UserRemoteOfficeGetRequest.
 */
class UserRemoteOfficeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName remoteOfficePhoneNumber
     * @var string|null
     */
    private $remoteOfficePhoneNumber = null;

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
     * Getter for remoteOfficePhoneNumber
     *
     * @ElementName remoteOfficePhoneNumber
     * @return string|null
     */
    public function getRemoteOfficePhoneNumber()
    {
        return $this->remoteOfficePhoneNumber;
    }

    /**
     * Setter for remoteOfficePhoneNumber
     *
     * @ElementName remoteOfficePhoneNumber
     * @param string|null $remoteOfficePhoneNumber
     * @return $this
     */
    public function setRemoteOfficePhoneNumber($remoteOfficePhoneNumber)
    {
        $this->remoteOfficePhoneNumber = $remoteOfficePhoneNumber;
        return $this;
    }


}

