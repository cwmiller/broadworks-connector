<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemStirShakenCallerIdDispositionMappingModifyRequest
 *
 * Request to modify the Caller Id Disposition mapping.
 *
 *         The response is either SuccessResponse or ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:18451","type":"sequence"}]
 */
class SystemStirShakenCallerIdDispositionMappingModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName verstat
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallerIdDispositionVerstat
     * @Group da582a1f8028404e70d260cf1f891033:18451
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallerIdDispositionVerstat|null
     */
    protected $verstat = null;

    /**
     * @ElementName attestationLevel
     * @Type \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18451
     * @var \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel|null
     */
    protected $attestationLevel = null;

    /**
     * @ElementName disposition
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallerIdDisposition
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:18451
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallerIdDisposition|null
     */
    protected $disposition = null;

    /**
     * Getter for verstat
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallerIdDispositionVerstat
     */
    public function getVerstat()
    {
        return $this->verstat instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->verstat;
    }

    /**
     * Setter for verstat
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallerIdDispositionVerstat $verstat
     * @return $this
     */
    public function setVerstat(\CWM\BroadWorksConnector\Ocip\Models\CallerIdDispositionVerstat $verstat)
    {
        $this->verstat = $verstat;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetVerstat()
    {
        $this->verstat = null;
        return $this;
    }

    /**
     * Getter for attestationLevel
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel
     */
    public function getAttestationLevel()
    {
        return $this->attestationLevel instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->attestationLevel;
    }

    /**
     * Setter for attestationLevel
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel $attestationLevel
     * @return $this
     */
    public function setAttestationLevel(\CWM\BroadWorksConnector\Ocip\Models\StirShakenAttestationLevel $attestationLevel)
    {
        $this->attestationLevel = $attestationLevel;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAttestationLevel()
    {
        $this->attestationLevel = null;
        return $this;
    }

    /**
     * Getter for disposition
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallerIdDisposition
     */
    public function getDisposition()
    {
        return $this->disposition instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->disposition;
    }

    /**
     * Setter for disposition
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallerIdDisposition $disposition
     * @return $this
     */
    public function setDisposition(\CWM\BroadWorksConnector\Ocip\Models\CallerIdDisposition $disposition)
    {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDisposition()
    {
        $this->disposition = null;
        return $this;
    }
}

