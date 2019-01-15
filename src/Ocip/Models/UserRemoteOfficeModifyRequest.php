<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserRemoteOfficeModifyRequest
 *
 * Modify the user level data associated with Remote Office.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"70aea661491074f1e7cc845c9a6c7ea3:73","type":"sequence"}]
 */
class UserRemoteOfficeModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 70aea661491074f1e7cc845c9a6c7ea3:73
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group 70aea661491074f1e7cc845c9a6c7ea3:73
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName remoteOfficePhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group 70aea661491074f1e7cc845c9a6c7ea3:73
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $remoteOfficePhoneNumber = null;

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
     * Getter for remoteOfficePhoneNumber
     *
     * @return string|null
     */
    public function getRemoteOfficePhoneNumber()
    {
        return $this->remoteOfficePhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->remoteOfficePhoneNumber;
    }

    /**
     * Setter for remoteOfficePhoneNumber
     *
     * @param string|null $remoteOfficePhoneNumber
     * @return $this
     */
    public function setRemoteOfficePhoneNumber($remoteOfficePhoneNumber = null)
    {
        if ($remoteOfficePhoneNumber === null) {
            $this->remoteOfficePhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->remoteOfficePhoneNumber = $remoteOfficePhoneNumber;
        }
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

