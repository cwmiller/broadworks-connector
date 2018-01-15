<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskGetResponse
 *
 * Response to the UserSMDIMessageDeskGetRequest.
 */
class UserSMDIMessageDeskGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName messageDeskNumber
     * @var string|null
     */
    private $messageDeskNumber = null;

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
     * Getter for messageDeskNumber
     *
     * @ElementName messageDeskNumber
     * @return string|null
     */
    public function getMessageDeskNumber()
    {
        return $this->messageDeskNumber;
    }

    /**
     * Setter for messageDeskNumber
     *
     * @ElementName messageDeskNumber
     * @param string|null $messageDeskNumber
     * @return $this
     */
    public function setMessageDeskNumber($messageDeskNumber)
    {
        $this->messageDeskNumber = $messageDeskNumber;
        return $this;
    }


}

