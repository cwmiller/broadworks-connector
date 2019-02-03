<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemCallRecordingGetPlatformUsageRequest
 *
 * Get the list of groups currently associated to the specified Call Recording platform.
 *                 The response is either SystemCallRecordingGetPlatformUsageResponse or ErrorResponse.
 *
 *                 Replaced by SystemCallRecordingGetPlatformUsageRequest22 in AS data mode.
 *
 * @see SystemCallRecordingGetPlatformUsageResponse
 * @see ErrorResponse
 * @see SystemCallRecordingGetPlatformUsageRequest22
 * @Groups [{"id":"ab0042aa512abc10edb3c55e4b416b0b:41720","type":"sequence"}]
 */
class SystemCallRecordingGetPlatformUsageRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group ab0042aa512abc10edb3c55e4b416b0b:41720
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

