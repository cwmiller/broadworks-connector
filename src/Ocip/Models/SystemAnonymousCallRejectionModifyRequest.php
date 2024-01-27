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
 * @Groups [{"id":"17d2110a0df023b843fdbd156e17bec8:77","type":"sequence"}]
 */
class SystemAnonymousCallRejectionModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName paiRequired
     * @Type bool
     * @Optional
     * @Group 17d2110a0df023b843fdbd156e17bec8:77
     * @var bool|null
     */
    protected $paiRequired = null;

    /**
     * @ElementName screenOnlyLocalCalls
     * @Type bool
     * @Optional
     * @Group 17d2110a0df023b843fdbd156e17bec8:77
     * @var bool|null
     */
    protected $screenOnlyLocalCalls = null;

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

