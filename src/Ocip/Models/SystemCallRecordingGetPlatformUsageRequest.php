<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformUsageRequest
 *
 * Get the list of groups currently associated to the specified Call Recording
 * platform.
 *         The response is either SystemCallRecordingGetPlatformUsageResponse or
 * ErrorResponse.
 *
 * @see SystemCallRecordingGetPlatformUsageResponse
 * @see ErrorResponse
 */
class SystemCallRecordingGetPlatformUsageRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

