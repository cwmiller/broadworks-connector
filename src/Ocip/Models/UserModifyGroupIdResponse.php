<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserModifyGroupIdResponse
 *
 * Response to UserModifyGroupIdRequest.
 *         error indicates the failing conditions preventing the user move. 
 *         impact indicates any change to user and group as the result of a user move.
 *
 * @see UserModifyGroupIdRequest
 * @Groups [{"id":"fb73488c2ef4ac4400ab213b637d79a9:2518","type":"sequence"}]
 */
class UserModifyGroupIdResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName error
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserMoveMessage
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2518
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserMoveMessage[]
     */
    protected $error = [
        
    ];

    /**
     * @ElementName impact
     * @Type \CWM\BroadWorksConnector\Ocip\Models\UserMoveMessage
     * @Array
     * @Optional
     * @Group fb73488c2ef4ac4400ab213b637d79a9:2518
     * @var \CWM\BroadWorksConnector\Ocip\Models\UserMoveMessage[]
     */
    protected $impact = [
        
    ];

    /**
     * Getter for error
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserMoveMessage[]
     */
    public function getError()
    {
        return $this->error instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->error;
    }

    /**
     * Setter for error
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserMoveMessage[] $error
     * @return $this
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetError()
    {
        $this->error = null;
        return $this;
    }

    /**
     * Adder for error
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserMoveMessage $error
     * @return $this
     */
    public function addError($error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * Getter for impact
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\UserMoveMessage[]
     */
    public function getImpact()
    {
        return $this->impact instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->impact;
    }

    /**
     * Setter for impact
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserMoveMessage[] $impact
     * @return $this
     */
    public function setImpact(array $impact)
    {
        $this->impact = $impact;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetImpact()
    {
        $this->impact = null;
        return $this;
    }

    /**
     * Adder for impact
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\UserMoveMessage $impact
     * @return $this
     */
    public function addImpact($impact)
    {
        $this->impact[] = $impact;
        return $this;
    }
}

