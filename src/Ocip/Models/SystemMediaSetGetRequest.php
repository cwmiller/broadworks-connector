<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaSetGetRequest
 *
 * Request to get a Media Set.
 *         The response is either a SystemMediaSetGetResponse or an ErrorResponse.
 *
 * @see SystemMediaSetGetResponse
 * @see ErrorResponse
 */
class SystemMediaSetGetRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName setName
     * @Type string
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

