<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAnonymousCallRejectionGetResponse
 *
 * Response to the SystemAnonymousCallRejectionGetRequest.
 *         The response contains the anonymous call rejection system.".
 *
 * @see SystemAnonymousCallRejectionGetRequest
 * @Groups [{"id":"0ec8a935bbd9452dccb33508d52d5e43:60","type":"sequence"}]
 */
class SystemAnonymousCallRejectionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName paiRequired
     * @Type bool
     * @Group 0ec8a935bbd9452dccb33508d52d5e43:60
     * @var bool|null
     */
    private $paiRequired = null;

    /**
     * @ElementName screenOnlyLocalCalls
     * @Type bool
     * @Group 0ec8a935bbd9452dccb33508d52d5e43:60
     * @var bool|null
     */
    private $screenOnlyLocalCalls = null;

    /**
     * Getter for paiRequired
     *
     * @return bool
     */
    public function getPaiRequired()
    {
        return $this->paiRequired instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->paiRequired;
    }

    /**
     * Setter for paiRequired
     *
     * @param bool $paiRequired
     * @return $this
     */
    public function setPaiRequired($paiRequired)
    {
        $this->paiRequired = $paiRequired;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPaiRequired()
    {
        $this->paiRequired = null;
        return $this;
    }

    /**
     * Getter for screenOnlyLocalCalls
     *
     * @return bool
     */
    public function getScreenOnlyLocalCalls()
    {
        return $this->screenOnlyLocalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->screenOnlyLocalCalls;
    }

    /**
     * Setter for screenOnlyLocalCalls
     *
     * @param bool $screenOnlyLocalCalls
     * @return $this
     */
    public function setScreenOnlyLocalCalls($screenOnlyLocalCalls)
    {
        $this->screenOnlyLocalCalls = $screenOnlyLocalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetScreenOnlyLocalCalls()
    {
        $this->screenOnlyLocalCalls = null;
        return $this;
    }


}

