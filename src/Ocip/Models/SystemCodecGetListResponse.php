<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCodecGetListResponse
 *
 * Response to SystemCodecGetListRequest.
 *
 * @see SystemCodecGetListRequest
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:4884","type":"sequence"}]
 */
class SystemCodecGetListResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName codec
     * @Type \CWM\BroadWorksConnector\Ocip\Models\Codec
     * @Array
     * @Optional
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:4884
     * @var \CWM\BroadWorksConnector\Ocip\Models\Codec[]
     */
    private $codec = array(
        
    );

    /**
     * Getter for codec
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\Codec[]
     */
    public function getCodec()
    {
        return $this->codec instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->codec;
    }

    /**
     * Setter for codec
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Codec[] $codec
     * @return $this
     */
    public function setCodec(array $codec)
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

    /**
     * Adder for codec
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\Codec $codec
     * @return $this
     */
    public function addCodec($codec)
    {
        $this->codec[] = $codec;
        return $this;
    }


}

