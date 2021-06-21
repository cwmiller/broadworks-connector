<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNumberDeliveryModifyRequest
 *
 * Modify the user level data associated with Calling Number Delivery.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"2739e54a6c7a2ab6abe092f89482573e:76","type":"sequence"}]
 */
class UserCallingNumberDeliveryModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group 2739e54a6c7a2ab6abe092f89482573e:76
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName isActiveForExternalCalls
     * @Type bool
     * @Optional
     * @Group 2739e54a6c7a2ab6abe092f89482573e:76
     * @var bool|null
     */
    private $isActiveForExternalCalls = null;

    /**
     * @ElementName isActiveForInternalCalls
     * @Type bool
     * @Optional
     * @Group 2739e54a6c7a2ab6abe092f89482573e:76
     * @var bool|null
     */
    private $isActiveForInternalCalls = null;

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
     * Getter for isActiveForExternalCalls
     *
     * @return bool
     */
    public function getIsActiveForExternalCalls()
    {
        return $this->isActiveForExternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActiveForExternalCalls;
    }

    /**
     * Setter for isActiveForExternalCalls
     *
     * @param bool $isActiveForExternalCalls
     * @return $this
     */
    public function setIsActiveForExternalCalls($isActiveForExternalCalls)
    {
        $this->isActiveForExternalCalls = $isActiveForExternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActiveForExternalCalls()
    {
        $this->isActiveForExternalCalls = null;
        return $this;
    }

    /**
     * Getter for isActiveForInternalCalls
     *
     * @return bool
     */
    public function getIsActiveForInternalCalls()
    {
        return $this->isActiveForInternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActiveForInternalCalls;
    }

    /**
     * Setter for isActiveForInternalCalls
     *
     * @param bool $isActiveForInternalCalls
     * @return $this
     */
    public function setIsActiveForInternalCalls($isActiveForInternalCalls)
    {
        $this->isActiveForInternalCalls = $isActiveForInternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActiveForInternalCalls()
    {
        $this->isActiveForInternalCalls = null;
        return $this;
    }


}

