<?php

namespace CWM\BroadWorksConnector\Ocip\Models;

/**
 * UserCallingPartyCategoryGetResponse
 *
 * Response to UserCallingPartyCategoryGetRequest.
 *
 * @see UserCallingPartyCategoryGetRequest
 * @Groups [{"id":"d8f04177e438f303b41c211e518706bf:41477","type":"sequence"}]
 */
class UserCallingPartyCategoryGetResponse extends \CWM\BroadWorksConnector\Ocip\Models\C\OCIDataResponse
{
    /**
     * @ElementName category
     * @Type \CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection
     * @Group d8f04177e438f303b41c211e518706bf:41477
     * @var \CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection|null
     */
    protected $category = null;

    /**
     * Getter for category
     *
     * @return \CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection
     */
    public function getCategory()
    {
        return $this->category instanceof \CWM\BroadWorksConnector\Ocip\Nil ? null : $this->category;
    }

    /**
     * Setter for category
     *
     * @param \CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection $category
     * @return $this
     */
    public function setCategory(\CWM\BroadWorksConnector\Ocip\Models\CallingPartyCategorySelection $category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return $this
     */
    public function unsetCategory()
    {
        $this->category = null;
        return $this;
    }
}

