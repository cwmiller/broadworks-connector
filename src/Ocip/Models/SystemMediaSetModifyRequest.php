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
 * @Groups [{"id":"da582a1f8028404e70d260cf1f891033:12275","type":"sequence"}]
 */
class SystemMediaSetModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName setName
     * @Type string
     * @Group da582a1f8028404e70d260cf1f891033:12275
     * @MinLength 1
     * @MaxLength 80
     * @var string|null
     */
    protected $setName = null;

    /**
     * @ElementName mediaNameList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementMediaNameList
     * @Optional
     * @Group da582a1f8028404e70d260cf1f891033:12275
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementMediaNameList|null
     */
    protected $mediaNameList = null;

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

    /**
     * Getter for mediaNameList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementMediaNameList
     */
    public function getMediaNameList()
    {
        return $this->mediaNameList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mediaNameList;
    }

    /**
     * Setter for mediaNameList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementMediaNameList $mediaNameList
     * @return $this
     */
    public function setMediaNameList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementMediaNameList $mediaNameList)
    {
        $this->mediaNameList = $mediaNameList;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMediaNameList()
    {
        $this->mediaNameList = null;
        return $this;
    }
}

