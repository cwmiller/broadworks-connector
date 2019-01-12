<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserSMDIMessageDeskGetResponse
 *
 * Response to the UserSMDIMessageDeskGetRequest.
 *
 * @see UserSMDIMessageDeskGetRequest
 * @Groups [{"id":"ee7bb69368e23a56a82c5d9cf07b5433:275","type":"sequence"}]
 */
class UserSMDIMessageDeskGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group ee7bb69368e23a56a82c5d9cf07b5433:275
     * @var bool|null
     */
    private $isActive = null;

    /**
     * @ElementName messageDeskNumber
     * @Type string
     * @Optional
     * @Group ee7bb69368e23a56a82c5d9cf07b5433:275
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

