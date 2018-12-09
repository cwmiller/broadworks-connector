<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemAnonymousCallRejectionModifyRequest
 *
 * Modify a system Anonymous Call Rejection parameter.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"717e1e4342421a820b1b313f1eb4eb01:77","type":"sequence"}]
 */
class SystemAnonymousCallRejectionModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName paiRequired
     * @Type bool
     * @Optional
     * @Group 717e1e4342421a820b1b313f1eb4eb01:77
     * @var bool|null
     */
    private $paiRequired = null;

    /**
     * @ElementName screenOnlyLocalCalls
     * @Type bool
     * @Optional
     * @Group 717e1e4342421a820b1b313f1eb4eb01:77
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

