<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMultimediaPolicyGetResponse
 *
 * Response to SystemMultimediaPolicyGetRequest
 *
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:11544","type":"sequence"}]
 */
class SystemMultimediaPolicyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName restrictNonAudioVideoMediaTypes
     * @Type bool
     * @Group 240b50f54d060859e5e275082fdf49f9:11544
     * @var bool|null
     */
    protected $restrictNonAudioVideoMediaTypes = null;

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
}

