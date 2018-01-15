<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAnonymousCallRejectionGetResponse
 *
 * Response to the SystemAnonymousCallRejectionGetRequest.
 *         The response contains the anonymous call rejection system.".
 */
class SystemAnonymousCallRejectionGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName paiRequired
     * @var bool|null
     */
    private $paiRequired = null;

    /**
     * @ElementName screenOnlyLocalCalls
     * @var bool|null
     */
    private $screenOnlyLocalCalls = null;

    /**
     * Getter for paiRequired
     *
     * @ElementName paiRequired
     * @return bool|null
     */
    public function getPaiRequired()
    {
        return $this->paiRequired;
    }

    /**
     * Setter for paiRequired
     *
     * @ElementName paiRequired
     * @param bool|null $paiRequired
     * @return $this
     */
    public function setPaiRequired($paiRequired)
    {
        $this->paiRequired = $paiRequired;
        return $this;
    }

    /**
     * Getter for screenOnlyLocalCalls
     *
     * @ElementName screenOnlyLocalCalls
     * @return bool|null
     */
    public function getScreenOnlyLocalCalls()
    {
        return $this->screenOnlyLocalCalls;
    }

    /**
     * Setter for screenOnlyLocalCalls
     *
     * @ElementName screenOnlyLocalCalls
     * @param bool|null $screenOnlyLocalCalls
     * @return $this
     */
    public function setScreenOnlyLocalCalls($screenOnlyLocalCalls)
    {
        $this->screenOnlyLocalCalls = $screenOnlyLocalCalls;
        return $this;
    }


}

