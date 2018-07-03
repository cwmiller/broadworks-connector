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
 */
class SystemMediaSetDeleteRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName setName
     * @var string|null
     */
    private $setName = null;

    /**
     * Getter for setName
     *
     * @ElementName setName
     * @return string|null
     */
    public function getSetName()
    {
        return $this->setName;
    }

    /**
     * Setter for setName
     *
     * @ElementName setName
     * @param string|null $setName
     * @return $this
     */
    public function setSetName($setName)
    {
        $this->setName = $setName;
        return $this;
    }


}

