<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserMusicOnHoldUserModifyRequest
 *
 * Modify data for Music On Hold User.
 *         The response is either a SuccessResponse or an
 *         ErrorResponse.
 *         Replaced By: UserMusicOnHoldUserModifyRequest16
 */
class UserMusicOnHoldUserModifyRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName source
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify|null
     */
    private $source = null;

    /**
     * @ElementName useAlternateSourceForInternalCalls
     * @var bool|null
     */
    private $useAlternateSourceForInternalCalls = null;

    /**
     * @ElementName internalSource
     * @var \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify|null
     */
    private $internalSource = null;

    /**
     * Getter for userId
     *
     * @ElementName userId
     * @return string|null
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Setter for userId
     *
     * @ElementName userId
     * @param string|null $userId
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Getter for source
     *
     * @ElementName source
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify|null
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Setter for source
     *
     * @ElementName source
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify|null $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Getter for useAlternateSourceForInternalCalls
     *
     * @ElementName useAlternateSourceForInternalCalls
     * @return bool|null
     */
    public function getUseAlternateSourceForInternalCalls()
    {
        return $this->useAlternateSourceForInternalCalls;
    }

    /**
     * Setter for useAlternateSourceForInternalCalls
     *
     * @ElementName useAlternateSourceForInternalCalls
     * @param bool|null $useAlternateSourceForInternalCalls
     * @return $this
     */
    public function setUseAlternateSourceForInternalCalls($useAlternateSourceForInternalCalls)
    {
        $this->useAlternateSourceForInternalCalls = $useAlternateSourceForInternalCalls;
        return $this;
    }

    /**
     * Getter for internalSource
     *
     * @ElementName internalSource
     * @return \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify|null
     */
    public function getInternalSource()
    {
        return $this->internalSource;
    }

    /**
     * Setter for internalSource
     *
     * @ElementName internalSource
     * @param \CWM\BroadWorksConnector\Ocip\Models\MusicOnHoldUserSourceModify|null $internalSource
     * @return $this
     */
    public function setInternalSource($internalSource)
    {
        $this->internalSource = $internalSource;
        return $this;
    }


}

