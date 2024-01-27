<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallRecordingGetResponse
 *
 * Response to the GroupCallRecordingGetRequest.
 *          The response contains the group's Call Recording platform information.
 *
 * @see GroupCallRecordingGetRequest
 * @Groups [{"id":"0731150ec7515df8cd710f04d8f62f66:124","type":"sequence"}]
 */
class GroupCallRecordingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName name
     * @Type string
     * @Optional
     * @Group 0731150ec7515df8cd710f04d8f62f66:124
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

