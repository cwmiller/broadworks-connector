<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformUsageRequest
 *
 * Get the list of groups currently associated to the specified Call Recording platform.
 *         The response is either SystemCallRecordingGetPlatformUsageResponse or ErrorResponse.
 *     
 *     Replaced by SystemCallRecordingGetPlatformUsageRequest22 in AS data mode.
 *
 * @see SystemCallRecordingGetPlatformUsageResponse
 * @see ErrorResponse
 * @see SystemCallRecordingGetPlatformUsageRequest22
 * @Groups [{"id":"240b50f54d060859e5e275082fdf49f9:9209","type":"sequence"}]
 */
class SystemCallRecordingGetPlatformUsageRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName name
     * @Type string
     * @Group 240b50f54d060859e5e275082fdf49f9:9209
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

