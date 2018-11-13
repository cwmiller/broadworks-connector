<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryGetResponse
 *
 * Response to the SystemNumberPortabilityQueryGetRequest.
 *         Returns system Number Portability Query Parameters.
 *
 * @see SystemNumberPortabilityQueryGetRequest
 */
class SystemNumberPortabilityQueryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName continueCallAsDialedOnTimeoutOrError
     * @Type bool
     * @var bool|null
     */
    private $continueCallAsDialedOnTimeoutOrError = null;

    /**
     * @ElementName numberPortabilityNameLookupTimeoutMilliseconds
     * @Type int
     * @var int|null
     */
    private $numberPortabilityNameLookupTimeoutMilliseconds = null;

    /**
     * Getter for continueCallAsDialedOnTimeoutOrError
     *
     * @return bool
     */
    public function getContinueCallAsDialedOnTimeoutOrError()
    {
        return $this->continueCallAsDialedOnTimeoutOrError instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->continueCallAsDialedOnTimeoutOrError;
    }

    /**
     * Setter for continueCallAsDialedOnTimeoutOrError
     *
     * @param bool $continueCallAsDialedOnTimeoutOrError
     * @return $this
     */
    public function setContinueCallAsDialedOnTimeoutOrError($continueCallAsDialedOnTimeoutOrError)
    {
        $this->continueCallAsDialedOnTimeoutOrError = $continueCallAsDialedOnTimeoutOrError;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetContinueCallAsDialedOnTimeoutOrError()
    {
        $this->continueCallAsDialedOnTimeoutOrError = null;
        return $this;
    }

    /**
     * Getter for numberPortabilityNameLookupTimeoutMilliseconds
     *
     * @return int
     */
    public function getNumberPortabilityNameLookupTimeoutMilliseconds()
    {
        return $this->numberPortabilityNameLookupTimeoutMilliseconds instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->numberPortabilityNameLookupTimeoutMilliseconds;
    }

    /**
     * Setter for numberPortabilityNameLookupTimeoutMilliseconds
     *
     * @param int $numberPortabilityNameLookupTimeoutMilliseconds
     * @return $this
     */
    public function setNumberPortabilityNameLookupTimeoutMilliseconds($numberPortabilityNameLookupTimeoutMilliseconds)
    {
        $this->numberPortabilityNameLookupTimeoutMilliseconds = $numberPortabilityNameLookupTimeoutMilliseconds;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetNumberPortabilityNameLookupTimeoutMilliseconds()
    {
        $this->numberPortabilityNameLookupTimeoutMilliseconds = null;
        return $this;
    }


}

