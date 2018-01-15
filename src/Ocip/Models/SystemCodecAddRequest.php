<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCodecAddRequest
 *
 * Request to add a codec to the ordered list of codecs supported by the system.
 *         The ordered list of codecs is sent to MGCP devices when creating
 * connections.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCodecAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName codec
     * @var string|null
     */
    private $codec = null;

    /**
     * Getter for codec
     *
     * @ElementName codec
     * @return string|null
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * Setter for codec
     *
     * @ElementName codec
     * @param string|null $codec
     * @return $this
     */
    public function setCodec($codec)
    {
        $this->codec = $codec;
        return $this;
    }


}

