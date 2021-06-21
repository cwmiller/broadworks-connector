<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * GroupEnhancedCallLogsSchemaInstanceGetResponse
 *
 * Response to GroupEnhancedCallLogsSchemaInstanceGetRequest.
 *
 * @see GroupEnhancedCallLogsSchemaInstanceGetRequest
 * @Groups [{"id":"f6b3702edb5f67fa12c2c426d98657db:69","type":"sequence"}]
 */
class GroupEnhancedCallLogsSchemaInstanceGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName name
     * @Type string
     * @Optional
     * @Group f6b3702edb5f67fa12c2c426d98657db:69
     * @MinLength 1
     * @MaxLength 80
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

