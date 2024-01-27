<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformUsageRequest22
 *
 * Get the list of groups currently associated to the specified Call Recording platform.
 *         The response is either SystemCallRecordingGetPlatformUsageResponse22 or ErrorResponse.
 *
 * @see SystemCallRecordingGetPlatformUsageResponse22
 * @see ErrorResponse
 * @Groups [{"id":"0731150ec7515df8cd710f04d8f62f66:302","type":"sequence"}]
 */
class SystemCallRecordingGetPlatformUsageRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group 0731150ec7515df8cd710f04d8f62f66:302
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $name = null;

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

