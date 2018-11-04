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
     * @Nillable
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName phoneNumberList
     * @Nillable
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null|\CWM\BroadWorksConnector\Ocip\Nil
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
     * @Nillable
     * @return string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Setter for description
     *
     * @ElementName description
     * @Nillable
     * @param string|null|\CWM\BroadWorksConnector\Ocip\Nil $description
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
     * @Nillable
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    public function getPhoneNumberList()
    {
        return $this->phoneNumberList;
    }

    /**
     * Setter for phoneNumberList
     *
     * @ElementName phoneNumberList
     * @Nillable
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null|\CWM\BroadWorksConnector\Ocip\Nil $phoneNumberList
     * @return $this
     */
    public function setPhoneNumberList($phoneNumberList)
    {
        $this->phoneNumberList = $phoneNumberList;
        return $this;
    }


}

