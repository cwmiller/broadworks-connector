<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRemoteOfficeGetResponse
 *
 * Response to UserRemoteOfficeGetRequest.
 *
 * @see UserRemoteOfficeGetRequest
 * @Groups [{"id":"cd13183ea1594e025e217f61ef9e0137:56","type":"sequence"}]
 */
class UserRemoteOfficeGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group cd13183ea1594e025e217f61ef9e0137:56
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName remoteOfficePhoneNumber
     * @Type string
     * @Optional
     * @Group cd13183ea1594e025e217f61ef9e0137:56
     * @var string|null
     */
    private $remoteOfficePhoneNumber = null;

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
     * Getter for remoteOfficePhoneNumber
     *
     * @return string
     */
    public function getRemoteOfficePhoneNumber()
    {
        return $this->remoteOfficePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->remoteOfficePhoneNumber;
    }

    /**
     * Setter for remoteOfficePhoneNumber
     *
     * @param string $remoteOfficePhoneNumber
     * @return $this
     */
    public function setRemoteOfficePhoneNumber($remoteOfficePhoneNumber)
    {
        $this->remoteOfficePhoneNumber = $remoteOfficePhoneNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRemoteOfficePhoneNumber()
    {
        $this->remoteOfficePhoneNumber = null;
        return $this;
    }


}

