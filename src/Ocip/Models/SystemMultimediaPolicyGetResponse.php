<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMultimediaPolicyGetResponse
 *
 * Response to SystemMultimediaPolicyGetRequest
 */
class SystemMultimediaPolicyGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName restrictNonAudioVideoMediaTypes
     * @var bool|null
     */
    private $restrictNonAudioVideoMediaTypes = null;

    /**
     * Getter for restrictNonAudioVideoMediaTypes
     *
     * @ElementName restrictNonAudioVideoMediaTypes
     * @return bool|null
     */
    public function getRestrictNonAudioVideoMediaTypes()
    {
        return $this->restrictNonAudioVideoMediaTypes;
    }

    /**
     * Setter for restrictNonAudioVideoMediaTypes
     *
     * @ElementName restrictNonAudioVideoMediaTypes
     * @param bool|null $restrictNonAudioVideoMediaTypes
     * @return $this
     */
    public function setRestrictNonAudioVideoMediaTypes($restrictNonAudioVideoMediaTypes)
    {
        $this->restrictNonAudioVideoMediaTypes = $restrictNonAudioVideoMediaTypes;
        return $this;
    }


}

