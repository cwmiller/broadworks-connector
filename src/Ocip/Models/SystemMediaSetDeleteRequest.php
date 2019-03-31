<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaSetDeleteRequest
 *
 * Request to delete a Media Set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"7f663d5135470c33ca64b0eed3c3aa0c:11035","type":"sequence"}]
 */
class SystemMediaSetDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName setName
     * @Type string
     * @Group 7f663d5135470c33ca64b0eed3c3aa0c:11035
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    private $setName = null;

    /**
     * Getter for setName
     *
     * @return string
     */
    public function getSetName()
    {
        return $this->setName instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->setName;
    }

    /**
     * Setter for setName
     *
     * @param string $setName
     * @return $this
     */
    public function setSetName($setName)
    {
        $this->setName = $setName;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSetName()
    {
        $this->setName = null;
        return $this;
    }


}

