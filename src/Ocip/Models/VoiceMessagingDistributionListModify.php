<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * VoiceMessagingDistributionListModify
 *
 * A list of voice mail distribution lists
 *         It is used when setting a user's voice messaging distribution lists
 *
 * @Groups [{"id":"3347d430e0d5c93a9ff8dcf0e3b60d6c:3194","type":"sequence"}]
 */
class VoiceMessagingDistributionListModify
{

    /**
     * @ElementName listId
     * @Type int
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3194
     * @MinInclusive 0
     * @MaxInclusive 14
     * @var int|null
     */
    private $listId = null;

    /**
     * @ElementName description
     * @Type string
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3194
     * @MinLength 1
     * @MaxLength 80
     * @var string|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $description = null;

    /**
     * @ElementName phoneNumberList
     * @Type \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList
     * @Nillable
     * @Optional
     * @Group 3347d430e0d5c93a9ff8dcf0e3b60d6c:3194
     * @var \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null|\CWM\BroadWorksConnector\Ocip\Nil
     */
    private $phoneNumberList = null;

    /**
     * Getter for listId
     *
     * @return int
     */
    public function getListId()
    {
        return $this->listId instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->listId;
    }

    /**
     * Setter for listId
     *
     * @param int $listId
     * @return $this
     */
    public function setListId($listId)
    {
        $this->listId = $listId;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetListId()
    {
        $this->listId = null;
        return $this;
    }

    /**
     * Getter for description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->description;
    }

    /**
     * Setter for description
     *
     * @param string|null $description
     * @return $this
     */
    public function setDescription($description = null)
    {
        if ($description === null) {
            $this->description = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->description = $description;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetDescription()
    {
        $this->description = null;
        return $this;
    }

    /**
     * Getter for phoneNumberList
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null
     */
    public function getPhoneNumberList()
    {
        return $this->phoneNumberList instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->phoneNumberList;
    }

    /**
     * Setter for phoneNumberList
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList|null $phoneNumberList
     * @return $this
     */
    public function setPhoneNumberList(\CWM\BroadWorksConnector\Ocip\Models\ReplacementOutgoingDNorSIPURIList $phoneNumberList = null)
    {
        if ($phoneNumberList === null) {
            $this->phoneNumberList = new \CWM\BroadWorksConnector\Ocip\Nil;
        } else {
            $this->phoneNumberList = $phoneNumberList;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetPhoneNumberList()
    {
        $this->phoneNumberList = null;
        return $this;
    }


}

