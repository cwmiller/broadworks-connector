<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMultimediaPolicyModifyRequest
 *
 * Modify the system level data associated with Multimedia Policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         The Following element is only used in AS data mode:
 *         -  alwaysAllowTelephoneEvents
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12638","type":"sequence"}]
 */
class SystemMultimediaPolicyModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName restrictNonAudioVideoMediaTypes
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12638
     * @var bool|null
     */
    protected $restrictNonAudioVideoMediaTypes = null;

    /**
     * @ElementName alwaysAllowTelephoneEvents
     * @Type bool
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12638
     * @var bool|null
     */
    protected $alwaysAllowTelephoneEvents = null;

    /**
     * Getter for restrictNonAudioVideoMediaTypes
     *
     * @return bool
     */
    public function getRestrictNonAudioVideoMediaTypes()
    {
        return $this->restrictNonAudioVideoMediaTypes instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->restrictNonAudioVideoMediaTypes;
    }

    /**
     * Setter for restrictNonAudioVideoMediaTypes
     *
     * @param bool $restrictNonAudioVideoMediaTypes
     * @return $this
     */
    public function setRestrictNonAudioVideoMediaTypes($restrictNonAudioVideoMediaTypes)
    {
        $this->restrictNonAudioVideoMediaTypes = $restrictNonAudioVideoMediaTypes;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetRestrictNonAudioVideoMediaTypes()
    {
        $this->restrictNonAudioVideoMediaTypes = null;
        return $this;
    }

    /**
     * Getter for alwaysAllowTelephoneEvents
     *
     * @return bool
     */
    public function getAlwaysAllowTelephoneEvents()
    {
        return $this->alwaysAllowTelephoneEvents instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->alwaysAllowTelephoneEvents;
    }

    /**
     * Setter for alwaysAllowTelephoneEvents
     *
     * @param bool $alwaysAllowTelephoneEvents
     * @return $this
     */
    public function setAlwaysAllowTelephoneEvents($alwaysAllowTelephoneEvents)
    {
        $this->alwaysAllowTelephoneEvents = $alwaysAllowTelephoneEvents;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetAlwaysAllowTelephoneEvents()
    {
        $this->alwaysAllowTelephoneEvents = null;
        return $this;
    }
}

