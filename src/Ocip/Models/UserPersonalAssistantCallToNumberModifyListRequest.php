<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantCallToNumberModifyListRequest
 *
 * Request to modify the user assigned Call to Number List information.
 *         The response is either a SuccessResponse or an ErrorResponse. 
 *         For the callToNumbers in the callToNumberList, the extension element 
 *         is not used and the number element is only used when the type is
 * BroadWorks Mobility.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 */
class UserPersonalAssistantCallToNumberModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName callToNumberList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callToNumberList = null;

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
     * Getter for callToNumberList
     *
     * @ElementName callToNumberList
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getCallToNumberList()
    {
        return $this->callToNumberList;
    }

    /**
     * Setter for callToNumberList
     *
     * @ElementName callToNumberList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null|\CWM\BroadWorksConnector\Ocip\Nil $callToNumberList
     * @return $this
     */
    public function setCallToNumberList($callToNumberList)
    {
        $this->callToNumberList = $callToNumberList;
        return $this;
    }


}

