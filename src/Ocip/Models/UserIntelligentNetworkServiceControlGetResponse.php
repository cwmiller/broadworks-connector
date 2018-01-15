<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserIntelligentNetworkServiceControlGetResponse
 *
 * Response to UserIntelligentNetworkServiceControlGetRequest.
 */
class UserIntelligentNetworkServiceControlGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName preAnswerActionsEnabled
     * @var bool|null
     */
    private $preAnswerActionsEnabled = null;

    /**
     * Getter for preAnswerActionsEnabled
     *
     * @ElementName preAnswerActionsEnabled
     * @return bool|null
     */
    public function getPreAnswerActionsEnabled()
    {
        return $this->preAnswerActionsEnabled;
    }

    /**
     * Setter for preAnswerActionsEnabled
     *
     * @ElementName preAnswerActionsEnabled
     * @param bool|null $preAnswerActionsEnabled
     * @return $this
     */
    public function setPreAnswerActionsEnabled($preAnswerActionsEnabled)
    {
        $this->preAnswerActionsEnabled = $preAnswerActionsEnabled;
        return $this;
    }


}

