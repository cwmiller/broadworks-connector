<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnhancedCallLogsSchemaInstanceGetResponse
 *
 * Response to GroupEnhancedCallLogsSchemaInstanceGetRequest.
 *
 * @see GroupEnhancedCallLogsSchemaInstanceGetRequest
 * @Groups [{"id":"1b5ee40628a3f2b1bcab94a53dec91e7:68","type":"sequence"}]
 */
class GroupEnhancedCallLogsSchemaInstanceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName name
     * @Type string
     * @Optional
     * @Group 1b5ee40628a3f2b1bcab94a53dec91e7:68
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

