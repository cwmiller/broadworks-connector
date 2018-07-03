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
     * @var string[]
     */
    private $codec = array(
        
    );

    /**
     * Getter for codec
     *
     * @ElementName codec
     * @return string[]
     */
    public function getCodec()
    {
        return $this->codec;
    }

    /**
     * Setter for codec
     *
     * @ElementName codec
     * @param string[] $codec
     * @return $this
     */
    public function setCodec($codec)
    {
        $this->codec = $codec;
        return $this;
    }

    /**
     * Adder for codec
     *
     * @ElementName codec
     * @param string $codec
     * @return $this
     */
    public function addCodec($codec)
    {
        $this->codec []= $codec;
        return $this;
    }


}

