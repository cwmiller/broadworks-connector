<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnhancedCallLogsSchemaInstanceGetResponse
 *
 * Response to GroupEnhancedCallLogsSchemaInstanceGetRequest.
 *
 * @see GroupEnhancedCallLogsSchemaInstanceGetRequest
 * @Groups [{"id":"04a33199b8359d9cc787bc7a2d16ab12:67","type":"sequence"}]
 */
class GroupEnhancedCallLogsSchemaInstanceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Optional
     * @Group 04a33199b8359d9cc787bc7a2d16ab12:67
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

