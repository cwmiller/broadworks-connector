<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserNumberPortabilityAnnouncementGetResponse
 *
 * Response to the UserNumberPortabilityAnnouncementGetRequest.
 *         The response contains the user Number Portability attributes.
 *
 * @see UserNumberPortabilityAnnouncementGetRequest
 * @Groups [{"id":"533728af9446065ec2988e4ac73ef4d7:59","type":"sequence"}]
 */
class UserNumberPortabilityAnnouncementGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{

    /**
     * @ElementName enable
     * @Type bool
     * @Group 533728af9446065ec2988e4ac73ef4d7:59
     * @var bool|null
     */
    private $enable = null;

    /**
     * Getter for enable
     *
     * @return bool
     */
    public function getEnable()
    {
        return $this->enable instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->enable;
    }

    /**
     * Setter for enable
     *
     * @param bool $enable
     * @return $this
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetEnable()
    {
        $this->enable = null;
        return $this;
    }


}

