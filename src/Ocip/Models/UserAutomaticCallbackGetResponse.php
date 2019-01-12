<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserAutomaticCallbackGetResponse
 *
 * Response to UserAutomaticCallbackGetRequest.
 *
 * @see UserAutomaticCallbackGetRequest
 * @Groups [{"id":"e8188f390ad4fcfad616cb409dd0e896:182","type":"sequence"}]
 */
class UserAutomaticCallbackGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName isActive
     * @Type bool
     * @Group e8188f390ad4fcfad616cb409dd0e896:182
     * @var bool|null
     */
    private $isActive = null;

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


}

