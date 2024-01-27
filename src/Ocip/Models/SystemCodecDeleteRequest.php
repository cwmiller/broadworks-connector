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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:5570","type":"sequence"}]
 */
class SystemCodecDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName codec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Codec
     * @Group da582a1f8028404e70d260cf1f891033:5570
     * @var \CWM\BroadWorksConnector\Ocip\Models\Codec|null
     */
    protected $codec = null;

    /**
     * Getter for codec
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Codec
     */
    public function getCodec()
    {
        return $this->codec instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->codec;
    }

    /**
     * Setter for codec
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Codec $codec
     * @return $this
     */
    public function setCodec(\CWM\BroadWorksConnector\Ocip\Models\Codec $codec)
    {
        $this->codec = $codec;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCodec()
    {
        $this->codec = null;
        return $this;
    }
}

