<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupCallRecordingGetResponse
 *
 * Response to the GroupCallRecordingGetRequest.
 *          The response contains the group's Call Recording platform information.
 *
 * @see GroupCallRecordingGetRequest
 * @Groups [{"id":"9741e074fbfeb4c7312bfa4dfbaee3d3:125","type":"sequence"}]
 */
class GroupCallRecordingGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Optional
     * @Group 9741e074fbfeb4c7312bfa4dfbaee3d3:125
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

