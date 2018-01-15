<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryModifyRequest
 *
 * Modify system Number Portability Query Parameters.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemNumberPortabilityQueryModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName continueCallAsDialedOnTimeoutOrError
     * @var bool|null
     */
    private $continueCallAsDialedOnTimeoutOrError = null;

    /**
     * @ElementName numberPortabilityNameLookupTimeoutMilliseconds
     * @var int|null
     */
    private $numberPortabilityNameLookupTimeoutMilliseconds = null;

    /**
     * Getter for continueCallAsDialedOnTimeoutOrError
     *
     * @ElementName continueCallAsDialedOnTimeoutOrError
     * @return bool|null
     */
    public function getContinueCallAsDialedOnTimeoutOrError()
    {
        return $this->continueCallAsDialedOnTimeoutOrError;
    }

    /**
     * Setter for continueCallAsDialedOnTimeoutOrError
     *
     * @ElementName continueCallAsDialedOnTimeoutOrError
     * @param bool|null $continueCallAsDialedOnTimeoutOrError
     * @return $this
     */
    public function setContinueCallAsDialedOnTimeoutOrError($continueCallAsDialedOnTimeoutOrError)
    {
        $this->continueCallAsDialedOnTimeoutOrError = $continueCallAsDialedOnTimeoutOrError;
        return $this;
    }

    /**
     * Getter for numberPortabilityNameLookupTimeoutMilliseconds
     *
     * @ElementName numberPortabilityNameLookupTimeoutMilliseconds
     * @return int|null
     */
    public function getNumberPortabilityNameLookupTimeoutMilliseconds()
    {
        return $this->numberPortabilityNameLookupTimeoutMilliseconds;
    }

    /**
     * Setter for numberPortabilityNameLookupTimeoutMilliseconds
     *
     * @ElementName numberPortabilityNameLookupTimeoutMilliseconds
     * @param int|null $numberPortabilityNameLookupTimeoutMilliseconds
     * @return $this
     */
    public function setNumberPortabilityNameLookupTimeoutMilliseconds($numberPortabilityNameLookupTimeoutMilliseconds)
    {
        $this->numberPortabilityNameLookupTimeoutMilliseconds = $numberPortabilityNameLookupTimeoutMilliseconds;
        return $this;
    }


}

