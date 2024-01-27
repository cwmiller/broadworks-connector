<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantExclusionNumberGetResponse
 *
 * Response to the UserPersonalAssistantExclusionNumberGetRequest
 *
 * @see UserPersonalAssistantExclusionNumberGetRequest
 * @Groups [{"id":"6bd221784ebf8af2fe1169d36a6ac2dd:319","type":"sequence"}]
 */
class UserPersonalAssistantExclusionNumberGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 6bd221784ebf8af2fe1169d36a6ac2dd:319
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $description = null;

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }
}

