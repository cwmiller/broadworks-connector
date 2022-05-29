<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserExecutiveAssistantModifyRequest
 *
 * Modify the setting for executive assistant.
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"edd49e38c60ed5c00d394f2a35697c84:80","type":"sequence"}]
 */
class UserExecutiveAssistantModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group edd49e38c60ed5c00d394f2a35697c84:80
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName enableDivert
     * @Type bool
     * @Optional
     * @Group edd49e38c60ed5c00d394f2a35697c84:80
     * @var bool|null
     */
    protected $enableDivert = null;

    /**
     * @ElementName divertToPhoneNumber
     * @Type string
     * @Nillable
     * @Optional
     * @Group edd49e38c60ed5c00d394f2a35697c84:80
     * @MinLength 1
     * @MaxLength 161
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $divertToPhoneNumber = null;

    /**
     * @ElementName optInStatus
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAssistantOptInStatus
     * @Array
     * @Optional
     * @Group edd49e38c60ed5c00d394f2a35697c84:80
     * @var \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAssistantOptInStatus[]
     */
    protected $optInStatus = array(
        
    );

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
     * Getter for enableDivert
     *
     * @return bool
     */
    public function getEnableDivert()
    {
        return $this->enableDivert instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enableDivert;
    }

    /**
     * Setter for enableDivert
     *
     * @param bool $enableDivert
     * @return $this
     */
    public function setEnableDivert($enableDivert)
    {
        $this->enableDivert = $enableDivert;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnableDivert()
    {
        $this->enableDivert = null;
        return $this;
    }

    /**
     * Getter for divertToPhoneNumber
     *
     * @return string|null
     */
    public function getDivertToPhoneNumber()
    {
        return $this->divertToPhoneNumber instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->divertToPhoneNumber;
    }

    /**
     * Setter for divertToPhoneNumber
     *
     * @param string|null $divertToPhoneNumber
     * @return $this
     */
    public function setDivertToPhoneNumber($divertToPhoneNumber = null)
    {
        if ($divertToPhoneNumber === null) {
            $this->divertToPhoneNumber = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->divertToPhoneNumber = $divertToPhoneNumber;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDivertToPhoneNumber()
    {
        $this->divertToPhoneNumber = null;
        return $this;
    }

    /**
     * Getter for optInStatus
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAssistantOptInStatus[]
     */
    public function getOptInStatus()
    {
        return $this->optInStatus instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->optInStatus;
    }

    /**
     * Setter for optInStatus
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAssistantOptInStatus[] $optInStatus
     * @return $this
     */
    public function setOptInStatus(array $optInStatus)
    {
        $this->optInStatus = $optInStatus;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetOptInStatus()
    {
        $this->optInStatus = null;
        return $this;
    }

    /**
     * Adder for optInStatus
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ExecutiveAssistantOptInStatus $optInStatus
     * @return $this
     */
    public function addOptInStatus($optInStatus)
    {
        $this->optInStatus[] = $optInStatus;
        return $this;
    }


}

