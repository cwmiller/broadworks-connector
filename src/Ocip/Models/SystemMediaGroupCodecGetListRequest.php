<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaGroupCodecGetListRequest
 *
 * Request to get the list of media under a media group.
 *         The response is either SystemMediaGroupCodecGetListResponse or
 * ErrorResponse.
 *
 * @see SystemMediaGroupCodecGetListResponse
 * @see ErrorResponse
 */
class SystemMediaGroupCodecGetListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @ElementName name
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Setter for name
     *
     * @ElementName name
     * @param string|null $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

