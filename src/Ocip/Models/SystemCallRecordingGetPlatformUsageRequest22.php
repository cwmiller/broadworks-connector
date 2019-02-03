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
 * @Groups [{"id":"9741e074fbfeb4c7312bfa4dfbaee3d3:212","type":"sequence"}]
 */
class SystemCallRecordingGetPlatformUsageRequest22 extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName name
     * @Type string
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:212
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

