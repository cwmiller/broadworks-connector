<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNumberDeliveryGetResponse
 *
 * Response to UserCallingNumberDeliveryGetRequest.
 *
 * @see UserCallingNumberDeliveryGetRequest
 */
class UserCallingNumberDeliveryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActiveForExternalCalls
     * @Type bool
     * @var bool|null
     */
    private $isActiveForExternalCalls = null;

    /**
     * @ElementName isActiveForInternalCalls
     * @Type bool
     * @var bool|null
     */
    private $isActiveForInternalCalls = null;

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

