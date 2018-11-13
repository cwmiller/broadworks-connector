<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMultimediaPolicyGetResponse
 *
 * Response to SystemMultimediaPolicyGetRequest
 *
 * @see SystemMultimediaPolicyGetRequest
 */
class SystemMultimediaPolicyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName restrictNonAudioVideoMediaTypes
     * @Type bool
     * @var bool|null
     */
    private $restrictNonAudioVideoMediaTypes = null;

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

