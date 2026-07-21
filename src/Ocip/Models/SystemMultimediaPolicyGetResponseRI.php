<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMultimediaPolicyGetResponseRI
 *
 * Response to SystemMultimediaPolicyGetRequestRI.
 *
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12619","type":"sequence"}]
 */
class SystemMultimediaPolicyGetResponseRI extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName restrictNonAudioVideoMediaTypes
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:12619
     * @var bool|null
     */
    protected $restrictNonAudioVideoMediaTypes = null;

    /**
     * @ElementName alwaysAllowTelephoneEvents
     * @Type bool
     * @Group da582a1f8028404e70d260cf1f891033:12619
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

