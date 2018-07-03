<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCodecDeleteRequest
 *
 * Request to delete a supported codec from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemCodecDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

