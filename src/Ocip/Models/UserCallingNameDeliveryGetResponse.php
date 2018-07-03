<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNameDeliveryGetResponse
 *
 * Response to UserCallingNameDeliveryGetRequest.
 *
 * @see UserCallingNameDeliveryGetRequest
 */
class UserCallingNameDeliveryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActiveForExternalCalls
     * @var bool|null
     */
    private $isActiveForExternalCalls = null;

    /**
     * @ElementName isActiveForInternalCalls
     * @var bool|null
     */
    private $isActiveForInternalCalls = null;

    /**
     * Getter for isActiveForExternalCalls
     *
     * @ElementName isActiveForExternalCalls
     * @return bool|null
     */
    public function getIsActiveForExternalCalls()
    {
        return $this->isActiveForExternalCalls;
    }

    /**
     * Setter for isActiveForExternalCalls
     *
     * @ElementName isActiveForExternalCalls
     * @param bool|null $isActiveForExternalCalls
     * @return $this
     */
    public function setIsActiveForExternalCalls($isActiveForExternalCalls)
    {
        $this->isActiveForExternalCalls = $isActiveForExternalCalls;
        return $this;
    }

    /**
     * Getter for isActiveForInternalCalls
     *
     * @ElementName isActiveForInternalCalls
     * @return bool|null
     */
    public function getIsActiveForInternalCalls()
    {
        return $this->isActiveForInternalCalls;
    }

    /**
     * Setter for isActiveForInternalCalls
     *
     * @ElementName isActiveForInternalCalls
     * @param bool|null $isActiveForInternalCalls
     * @return $this
     */
    public function setIsActiveForInternalCalls($isActiveForInternalCalls)
    {
        $this->isActiveForInternalCalls = $isActiveForInternalCalls;
        return $this;
    }


}

