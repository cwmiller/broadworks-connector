<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformUsageRequest
 *
 * Get the list of groups currently associated to the specified Call Recording platform.
 *         The response is either SystemCallRecordingGetPlatformUsageResponse or ErrorResponse.
 *
 * @see SystemCallRecordingGetPlatformUsageResponse
 * @see ErrorResponse
 * @Groups [{"id":"f913e539ecbb63cf455f6c316963b896:178","type":"sequence"}]
 */
class SystemCallRecordingGetPlatformUsageRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group f913e539ecbb63cf455f6c316963b896:178
     * @var string|null
     */
    private $name = null;

    /**
     * Getter for name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->name;
    }

    /**
     * Setter for name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetName()
    {
        $this->name = null;
        return $this;
    }


}

