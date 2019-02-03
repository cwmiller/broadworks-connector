<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNumberDeliveryGetResponse
 *
 * Response to UserCallingNumberDeliveryGetRequest.
 *
 * @see UserCallingNumberDeliveryGetRequest
 * @Groups [{"id":"2739e54a6c7a2ab6abe092f89482573e:58","type":"sequence"}]
 */
class UserCallingNumberDeliveryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActiveForExternalCalls
     * @Type bool
     * @Group 2739e54a6c7a2ab6abe092f89482573e:58
     * @var bool|null
     */
    private $isActiveForExternalCalls = null;

    /**
     * @ElementName isActiveForInternalCalls
     * @Type bool
     * @Group 2739e54a6c7a2ab6abe092f89482573e:58
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

