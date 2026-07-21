<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMusicOnHoldUserModifyRequestRI
 *
 * Modify data for Music On Hold User.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"3a0309eb8d406fefc891f554ef114669:331","type":"sequence"}]
 */
class UserMusicOnHoldUserModifyRequestRI extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{
    /**
     * @ElementName userId
     * @Type string
     * @Group 3a0309eb8d406fefc891f554ef114669:331
     * @MinLength 1
     * @MaxLength 161
     * @var string|null
     */
    protected $userId = null;

    /**
     * @ElementName source
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyRI
     * @Optional
     * @Group 3a0309eb8d406fefc891f554ef114669:331
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyRI|null
     */
    protected $source = null;

    /**
     * @ElementName useAlternateSourceForInternalCalls
     * @Type bool
     * @Optional
     * @Group 3a0309eb8d406fefc891f554ef114669:331
     * @var bool|null
     */
    protected $useAlternateSourceForInternalCalls = null;

    /**
     * @ElementName internalSource
     * @Type \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyRI
     * @Optional
     * @Group 3a0309eb8d406fefc891f554ef114669:331
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyRI|null
     */
    protected $internalSource = null;

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
     * Getter for source
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyRI
     */
    public function getSource()
    {
        return $this->source instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->source;
    }

    /**
     * Setter for source
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyRI $source
     * @return $this
     */
    public function setSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyRI $source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetSource()
    {
        $this->source = null;
        return $this;
    }

    /**
     * Getter for useAlternateSourceForInternalCalls
     *
     * @return bool
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return $this->useAlternateSourceForInternalCalls instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->useAlternateSourceForInternalCalls;
    }

    /**
     * Setter for useAlternateSourceForInternalCalls
     *
     * @param bool $useAlternateSourceForInternalCalls
     * @return $this
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls)
    {
        $this->useAlternateSourceForInternalCalls = $useAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetUseAlternateSourceForInternalCalls()
    {
        $this->useAlternateSourceForInternalCalls = null;
        return $this;
    }

    /**
     * Getter for internalSource
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyRI
     */
    public function getInternalSource()
    {
        return $this->internalSource instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->internalSource;
    }

    /**
     * Setter for internalSource
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyRI $internalSource
     * @return $this
     */
    public function setInternalSource(\CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModifyRI $internalSource)
    {
        $this->internalSource = $internalSource;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetInternalSource()
    {
        $this->internalSource = null;
        return $this;
    }
}

