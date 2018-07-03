<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserNumberPortabilityAnnouncementGetResponse
 *
 * Response to the UserNumberPortabilityAnnouncementGetRequest.
 *         The response contains the user Number Portability attributes.
 *
 * @see UserNumberPortabilityAnnouncementGetRequest
 */
class UserNumberPortabilityAnnouncementGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enable
     * @var bool|null
     */
    private $enable = null;

    /**
     * Getter for enable
     *
     * @ElementName enable
     * @return bool|null
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Setter for enable
     *
     * @ElementName enable
     * @param bool|null $enable
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;
        return $this;
    }


}

