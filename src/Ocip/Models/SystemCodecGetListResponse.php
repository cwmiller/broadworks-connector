<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCodecGetListResponse
 *
 * Response to SystemCodecGetListRequest.
 *
 * @see SystemCodecGetListRequest
 */
class SystemCodecGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName codec
     * @var \CWM\BroadWorksConnector\Ocip\Models\Codec[]
     */
    private $codec = array(
        
    );

    /**
     * Getter for codec
     *
     * @ElementName codec
     * @return \CWM\BroadWorksConnector\Ocip\Models\Codec[]
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * Setter for codec
     *
     * @ElementName codec
     * @param \CWM\BroadWorksConnector\Ocip\Models\Codec[] $codec
     * @return $this
     */
    public function setCodec(array $codec)
    {
        $this->codec = $codec;
        return $this;
    }

    /**
     * Adder for codec
     *
     * @ElementName codec
     * @param \CWM\BroadWorksConnector\Ocip\Models\Codec $codec
     * @return $this
     */
    public function addCodec($codec)
    {
        $this->codec []= $codec;
        return $this;
    }


}

