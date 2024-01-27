<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingNameRetrievalModifyRequest
 *
 * Modify the user level data associated with Calling Name Retrieval.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"ba51f415ebda0240287c719bc767eadf:165","type":"sequence"}]
 */
class UserCallingNameRetrievalModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group ba51f415ebda0240287c719bc767eadf:165
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName isActive
     * @Type bool
     * @Optional
     * @Group ba51f415ebda0240287c719bc767eadf:165
     * @var bool|null
     */
    protected $isActive = null;

    /**
     * @ElementName bypassFiltering
     * @Type bool
     * @Optional
     * @Group ba51f415ebda0240287c719bc767eadf:165
     * @var bool|null
     */
    protected $bypassFiltering = null;

    /**
     * @ElementName dnWhiteList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalWhiteListReplacementList
     * @Nillable
     * @Optional
     * @Group ba51f415ebda0240287c719bc767eadf:165
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalWhiteListReplacementList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    protected $dnWhiteList = null;

    /**
     * Getter for userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->userId;
    }

    /**
     * Setter for userId
     *
     * @param string $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUserId()
    {
        $this->userId = null;
        return $this;
    }

    /**
     * Getter for isActive
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->isActive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isActive;
    }

    /**
     * Setter for isActive
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsActive()
    {
        $this->isActive = null;
        return $this;
    }

    /**
     * Getter for bypassFiltering
     *
     * @return bool
     */
    public function getBypassFiltering()
    {
        return $this->bypassFiltering instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->bypassFiltering;
    }

    /**
     * Setter for bypassFiltering
     *
     * @param bool $bypassFiltering
     * @return $this
     */
    public function setBypassFiltering($bypassFiltering)
    {
        $this->bypassFiltering = $bypassFiltering;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetBypassFiltering()
    {
        $this->bypassFiltering = null;
        return $this;
    }

    /**
     * Getter for dnWhiteList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalWhiteListReplacementList|null
     */
    public function getDnWhiteList()
    {
        return $this->dnWhiteList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->dnWhiteList;
    }

    /**
     * Setter for dnWhiteList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalWhiteListReplacementList|null $dnWhiteList
     * @return $this
     */
    public function setDnWhiteList(\CWM\BroadWorksConnector\Ocip\Models\CallingNameRetrievalWhiteListReplacementList $dnWhiteList = null)
    {
        if ($dnWhiteList === null) {
            $this->dnWhiteList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->dnWhiteList = $dnWhiteList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDnWhiteList()
    {
        $this->dnWhiteList = null;
        return $this;
    }
}

