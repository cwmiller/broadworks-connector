<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCodecAddRequest
 *
 * Request to add a codec to the ordered list of codecs supported by the system.
 *         The ordered list of codecs is sent to MGCP devices when creating
 * connections.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCodecAddRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName codec
     * @var \CWM\BroadWorksConnector\Ocip\Models\Codec|null
     */
    private $codec = null;

    /**
     * Getter for codec
     *
     * @ElementName codec
     * @return \CWM\BroadWorksConnector\Ocip\Models\Codec|null
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * Setter for codec
     *
     * @ElementName codec
     * @param \CWM\BroadWorksConnector\Ocip\Models\Codec|null $codec
     * @return $this
     */
    public function setCodec(\CWM\BroadWorksConnector\Ocip\Models\Codec $codec)
    {
        $this->codec = $codec;
        return $this;
    }


}

