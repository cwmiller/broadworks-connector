<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskGetResponse
 *
 * Response to the UserSMDIMessageDeskGetRequest.
 *
 * @see UserSMDIMessageDeskGetRequest
 */
class UserSMDIMessageDeskGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName messageDeskNumber
     * @Type string
     * @var string|null
     */
    private $messageDeskNumber = null;

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
     * Getter for messageDeskNumber
     *
     * @return string
     */
    public function getMessageDeskNumber()
    {
        return $this->messageDeskNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->messageDeskNumber;
    }

    /**
     * Setter for messageDeskNumber
     *
     * @param string $messageDeskNumber
     * @return $this
     */
    public function setMessageDeskNumber($messageDeskNumber)
    {
        $this->messageDeskNumber = $messageDeskNumber;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMessageDeskNumber()
    {
        $this->messageDeskNumber = null;
        return $this;
    }


}

