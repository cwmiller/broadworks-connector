<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAnonymousCallRejectionModifyRequest
 *
 * Modify a system Anonymous Call Rejection parameter.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAnonymousCallRejectionModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

