<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SystemMediaSetModifyRequest
 *
 * Request to modify a Media Set.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class SystemMediaSetModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName setName
     * @var string|null
     */
    private $setName = null;

    /**
     * @ElementName mediaNameList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementMediaNameList|null
     */
    private $mediaNameList = null;

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

    /**
     * Getter for mediaNameList
     *
     * @ElementName mediaNameList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementMediaNameList|null
     */
    public function getMediaNameList()
    {
        return $this->mediaNameList;
    }

    /**
     * Setter for mediaNameList
     *
     * @ElementName mediaNameList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementMediaNameList|null $mediaNameList
     * @return $this
     */
    public function setMediaNameList($mediaNameList)
    {
        $this->mediaNameList = $mediaNameList;
        return $this;
    }


}

