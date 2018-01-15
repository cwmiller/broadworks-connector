<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingDeletePlatformRequest
 *
 * Delete a Call Recording platform.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCallRecordingDeletePlatformRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

