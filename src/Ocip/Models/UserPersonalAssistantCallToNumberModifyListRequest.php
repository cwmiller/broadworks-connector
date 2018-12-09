<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserPersonalAssistantCallToNumberModifyListRequest
 *
 * Request to modify the user assigned Call to Number List information.
 *         The response is either a SuccessResponse or an ErrorResponse. 
 *         For the callToNumbers in the callToNumberList, the extension element 
 *         is not used and the number element is only used when the type is BroadWorks Mobility.
 *
 * @see SuccessResponse
 * @see ErrorResponse
 * @Groups [{"id":"f04e7de96ed87c401bee5b5d2e80ccd3:162","type":"sequence"}]
 */
class UserPersonalAssistantCallToNumberModifyListRequest extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIRequest
{

    /**
     * @ElementName userId
     * @Type string
     * @Group f04e7de96ed87c401bee5b5d2e80ccd3:162
     * @var string|null
     */
    private $userId = null;

    /**
     * @ElementName callToNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList
     * @Nillable
     * @Optional
     * @Group f04e7de96ed87c401bee5b5d2e80ccd3:162
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $callToNumberList = null;

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
     * Getter for callToNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null
     */
    public function getCallToNumberList()
    {
        return $this->callToNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->callToNumberList;
    }

    /**
     * Setter for callToNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList|null $callToNumberList
     * @return $this
     */
    public function setCallToNumberList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementCallToNumberList $callToNumberList)
    {
        if ($callToNumberList === null) {
            $this->callToNumberList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->callToNumberList = $callToNumberList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCallToNumberList()
    {
        $this->callToNumberList = null;
        return $this;
    }


}

