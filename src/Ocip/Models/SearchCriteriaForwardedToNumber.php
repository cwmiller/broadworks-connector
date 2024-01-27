<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * SearchCriteriaForwardedToNumber
 *
 * Criteria for searching for a forwarded to number.
 *         This search criteria data type is only intended to be used by the commands 
 *         introduced by BW-2301. 
 *         The commands are EnterpriseUserCallForwardingSettingsGetListRequest 
 *         and GroupUserCallForwardingSettingsGetListRequest.
 *         The following Call Forwarding services are compatible for this search:
 *         Call Forwarding Always, Call Forwarding Always Secondary, Call Forwarding Busy,
 *         Call Forwarding No Answer, Call Forwarding Not Reachable, Call Forwarding Selective.
 *
 * @see EnterpriseUserCallForwardingSettingsGetListRequest
 * @see GroupUserCallForwardingSettingsGetListRequest
 * @Groups [{"id":"972fbf832439609ec8f2765c5637c3f1:1471","type":"sequence"}]
 */
class SearchCriteriaForwardedToNumber extends SearchCriteria
{
    /**
     * @ElementName mode
     * @Type \CWM\BroadWorksConnector\Ocip\Models\SearchMode
     * @Group 972fbf832439609ec8f2765c5637c3f1:1471
     * @var \CWM\BroadWorksConnector\Ocip\Models\SearchMode|null
     */
    protected $mode = null;

    /**
     * @ElementName value
     * @Type string
     * @Group 972fbf832439609ec8f2765c5637c3f1:1471
     * @MinLength 1
     * @MaxLength 23
     * @var string|null
     */
    protected $value = null;

    /**
     * @ElementName isCaseInsensitive
     * @Type bool
     * @Group 972fbf832439609ec8f2765c5637c3f1:1471
     * @var bool|null
     */
    protected $isCaseInsensitive = null;

    /**
     * Getter for mode
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\SearchMode
     */
    public function getMode()
    {
        return $this->mode instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->mode;
    }

    /**
     * Setter for mode
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\SearchMode $mode
     * @return $this
     */
    public function setMode(\CWM\BroadWorksConnector\Ocip\Models\SearchMode $mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetMode()
    {
        $this->mode = null;
        return $this;
    }

    /**
     * Getter for value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->value;
    }

    /**
     * Setter for value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetValue()
    {
        $this->value = null;
        return $this;
    }

    /**
     * Getter for isCaseInsensitive
     *
     * @return bool
     */
    public function getIsCaseInsensitive()
    {
        return $this->isCaseInsensitive instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->isCaseInsensitive;
    }

    /**
     * Setter for isCaseInsensitive
     *
     * @param bool $isCaseInsensitive
     * @return $this
     */
    public function setIsCaseInsensitive($isCaseInsensitive)
    {
        $this->isCaseInsensitive = $isCaseInsensitive;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetIsCaseInsensitive()
    {
        $this->isCaseInsensitive = null;
        return $this;
    }
}

