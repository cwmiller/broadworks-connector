<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingDistributionListModify
 *
 * A list of voice mail distribution lists
 *         It is used when setting a user's voice messaging distribution lists
 */
class VoiceMessagingDistributionListModify
{

    /**
     * @ElementName listId
     * @var int|null
     */
    private $listId = null;

    /**
     * @ElementName description
     * @var string|null
     */
    private $description = null;

    /**
     * @ElementName phoneNumberList
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null
     */
    private $phoneNumberList = null;

    /**
     * Getter for listId
     *
     * @ElementName listId
     * @return int|null
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Setter for listId
     *
     * @ElementName listId
     * @param int|null $listId
     * @return $this
     */
    public function setListId($listId)
    {
        $this->listId = $listId;
        return $this;
    }

    /**
     * Getter for description
     *
     * @ElementName description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Getter for phoneNumberList
     *
     * @ElementName phoneNumberList
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null
     */
    public function getPhoneNumberList()
    {
        return $this->phoneNumberList;
    }

    /**
     * Setter for phoneNumberList
     *
     * @ElementName phoneNumberList
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null $phoneNumberList
     * @return $this
     */
    public function setPhoneNumberList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList $phoneNumberList)
    {
        $this->phoneNumberList = $phoneNumberList;
        return $this;
    }


}

