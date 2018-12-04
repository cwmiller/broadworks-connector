<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnhancedCallLogsSchemaInstanceGetResponse
 *
 * Response to GroupEnhancedCallLogsSchemaInstanceGetRequest.
 *
 * @see GroupEnhancedCallLogsSchemaInstanceGetRequest
 * @Groups [{"id":"1b1edb32782550c1a52523b734e3143d:67","type":"sequence"}]
 */
class GroupEnhancedCallLogsSchemaInstanceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Optional
     * @Group 1b1edb32782550c1a52523b734e3143d:67
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

