<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemNumberPortabilityQueryGetResponse
 *
 * Response to the SystemNumberPortabilityQueryGetRequest.
 *         Returns system Number Portability Query Parameters.
 *
 * @see SystemNumberPortabilityQueryGetRequest
 * @Groups [{"id":"b5f5416d9e71f8e4246cda16c4723744:11415","type":"sequence"}]
 */
class SystemNumberPortabilityQueryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName continueCallAsDialedOnTimeoutOrError
     * @Type bool
     * @Group b5f5416d9e71f8e4246cda16c4723744:11415
     * @var bool|null
     */
    private $continueCallAsDialedOnTimeoutOrError = null;

    /**
     * @ElementName numberPortabilityNameLookupTimeoutMilliseconds
     * @Type int
     * @Group b5f5416d9e71f8e4246cda16c4723744:11415
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

