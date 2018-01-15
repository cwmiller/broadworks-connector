<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaSetGetRequest
 *
 * Request to get a Media Set.
 *         The response is either a SystemMediaSetGetResponse or an ErrorResponse.
 */
class SystemMediaSetGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
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

